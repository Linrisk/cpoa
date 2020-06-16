 <?php
 session_start();

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


$nom=$_POST['nomhotel'];
$type=$_POST['type'];
$description=$_POST['description'];
$adresse=$_POST['adresse'];
$nbchambres=$_POST['nbchambres'];

$_SESSION["nbchambres"]=$_POST['nbchambres'];
$_SESSION["nomhotel"]=$_POST['nomhotel'];

$reponse = $bdd->query('INSERT INTO hebergement VALUES("","'.$nom.'","'.$type.'","'.$description.'","'.$adresse.'")');
  $last_id = $bdd->lastInsertId();
//  echo "New record created successfully. Last inserted ID is: " . $last_id;
   //$_SESSION["idhotel"]=$last_id;

 // echo $_SESSION["login"];



$reponse = $bdd->query('UPDATE profil SET idh="'.$last_id.'" where login="'.$_SESSION["login"].'"');
$_SESSION["idh"]=$last_id;

$reponse->closeCursor();

?>

<?php include '../views/gestion_chambres.php' ?>