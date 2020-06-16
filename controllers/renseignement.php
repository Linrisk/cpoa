<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;port=3308;dbname=cpoa;charset=utf8', 'root', '');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
}




$reponse = $bdd->query('SELECT * from hebergement where  id="'.$_SESSION["idh"].'"'); // à check avec from hebergement, where hebergement.id=profil.idh
 
while ($donnees = $reponse->fetch())
{
	echo $donnees["Nom"]; ?> </br> <?php
	echo $donnees["type"]; ?> </br> <?php
	echo $donnees["services"]; ?> </br> <?php
	echo $donnees["Adresse"]; ?> </br> <?php

}
$reponse->closeCursor(); // Termine le traitement de la requête

?>	

