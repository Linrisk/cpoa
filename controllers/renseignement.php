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
{	$_SESSION["nomhotel"]=$donnees["Nom"];
	$_SESSION["type"]=$donnees["type"];
	$_SESSION["services"]=$donnees["services"];
	$_SESSION["adresse"]=$donnees["Adresse"];

	echo 'Nom : '.$donnees["Nom"]; ?> </br> <?php
	echo '<div class="text-center">Nom : '.$donnees["Nom"].'</div>';
	echo '<div class="text-center">Type : '.$donnees["type"].'</div>';
	echo '<div class="text-center">Services : '.$donnees["services"].'</div>';
	echo '<div class="text-center">Adresse : '.$donnees["Adresse"].'</div>';


}
$reponse->closeCursor(); // Termine le traitement de la requête

?>	

