<?php
session_start();
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

$login=$_POST['login'];
  $_SESSION["login"] = $_POST['login'];
  $_SESSION["password"] = $_POST['password'];
     


$mot_de_passe=$_POST['password'];



$reponse = $bdd->query('SELECT * from profil where  login="'.$login.'"'); // à check avec from hebergement, where hebergement.id=profil.idh

while ($donnees = $reponse->fetch())
{
	if($mot_de_passe==$donnees['mdp']){

		if($donnees['type']=="gerant"){

			if ($donnees['idh']==0){
				 header('Location: ../views/inscription.php');      
			}

			 else {
				header('Location: ../views/accueil.php');      

			}

		}

		else { echo 'ceci est qqn du staff';  }
	}
	else {
		echo 'mauvais mdp';
	}			
								
}


$reponse->closeCursor(); // Termine le traitement de la requête

?>



<!-- if ($donnees['id']==!"NULL"){
									echo 'tout est ok';
								}

								else {
									echo 'premiere connexion ';
								}

								-->