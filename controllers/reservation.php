<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;port=3308;dbname=cpoa;charset=utf8', 'root', '');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
}


$id_hotel=$_POST["box"];
$date= $_POST["date"];

	
$nb_jours=$_POST["nb"];
$erreur=0;

$bdd->query('SET autocommit = 0');
$bdd->query('START TRANSACTION');

foreach ($_POST['check'] as $value) {


	 
	if($bdd->query('SELECT id_jury FROM vip where id = '.$value)->fetch()['id_jury'] == 0){ /*t'es pas jury frere*/
		for ($i=$date; $i < $date+$nb_jours ; $i++) { 
			if($bdd->query('SELECT COUNT(*) as total 
							from vip,sejour 
							where vip.id=sejour.id_vip 
							and sejour.date="2014-05-'.$i.'" 
							and sejour.id_hebergement = '.$id_hotel.' 
							and id_jury = (SELECT Num_cat 
										   from vip,films 
										   where vip.id_film=films.id_film 
										   and vip.id = '.$value.')'
						   )->fetch()['total'] != 0){
				$erreur=1;
			}
		}
	} else {
		for ($i=$date; $i < $date+$nb_jours ; $i++) {  /*t'es jury poto */
			if($bdd->query('SELECT COUNT(*) as total 
							from vip,sejour,films 
							where vip.id_film=films.id_film 
							and vip.id=sejour.id_vip 
							and sejour.date="2014-05-'.$i.'" 
							and sejour.id_hebergement = '.$id_hotel.' 
							and films.num_cat = (SELECT id_jury 
												 from vip 
												 where vip.id = '.$value.')'
						   )->fetch()['total'] != 0){
				$erreur=1;
			}
		}
	}

	if($erreur == 1){
		break;
	} else {
		for ($i=0; $i <$nb_jours ; $i++) {
			$bdd->query('INSERT into sejour VALUES("","'.$value.'","2014-05-'.$date.'","'.$id_hotel.'")');
			$date=$date+1;
		}
	}
}

$bdd->query('SET autocommit = 1');

if($erreur==0){
	$bdd->query('COMMIT');
	header('Location: ../views/interface_staff.php');
} else {
	$bdd->query('ROLLBACK');
	header('Location: ../views/interface_staff.php?erreur=1');
}

?>




