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



$reponse = $bdd->query('SELECT * from hebergement where  nom="'.$SESSION_["nomhotel"].'"'); // à check avec from hebergement, where hebergement.id=profil.idh
echo $SESSION_["nomhotel"];

?>

