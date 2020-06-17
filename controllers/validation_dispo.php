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


$bdd->query('DELETE reservation_gerant FROM reservation_gerant INNER JOIN chambre ON reservation_gerant.num_chambre = chambre.id WHERE chambre.id_hotel = '.$_SESSION["idh"]);
var_dump($_POST);
foreach ($_POST['check'] as $value) {
	$date = new DateTime('2014-05-'.strtok($value, '_').' 00:00:00');
	$id = substr($value, strpos($value, "_") + 1);
	$reponse = $bdd->query('INSERT INTO reservation_gerant VALUES("","'.$id.'","'.$date->format('Y-m-d H:i:s').'")'); 
}


/*
- Inserer les valeurs dans les basses de données qui correspond 
*/

 header('Location: ../views/accueil.php');      






?>