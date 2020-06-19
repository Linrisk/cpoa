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
echo $nom;


$type=$_POST['type'];
echo $type;

$adresse=$_POST['adresse'];
echo $adresse;

$description=$_POST['description'];
echo $description;

if($nom!=$_SESSION['nomhotel']){
	$bdd->query('UPDATE hebergement SET Nom = "'.$nom.'" WHERE id="'.$_SESSION["idh"].'"');
}

if($type!=$_SESSION['type']){
	$bdd->query('UPDATE hebergement SET type = "'.$type.'" WHERE id="'.$_SESSION["idh"].'"');
}

if($adresse!=$_SESSION['adresse']){
	$bdd->query('UPDATE hebergement SET Adresse = "'.$adresse.'" WHERE id="'.$_SESSION["idh"].'"');
}

if($description!=$_SESSION['services']){
	$bdd->query('UPDATE hebergement SET services = "'.$description.'" WHERE id="'.$_SESSION["idh"].'"');
}

?>