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

$j=1;
echo 'ok';
var_dump($_POST['capa'.$j]);
echo 'id est : '.$_SESSION["idh"];
while (isset($_POST['capa'.$j]))

{	
$reponse = $bdd->query('INSERT INTO chambre VALUES("","'.$_POST['capa'.$j].'","'.$_SESSION["idh"].'")');
$j=$j+1;

}



$reponse->closeCursor();


?>

<?php header('Location: ../views/accueil.php');      ?>
