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

$adresse_mail=$_POST['user_mail'];
echo $adresse_mail;
$mot_de_passe=$_POST['password'];
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM profil');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
   <?php if($adresse_mail==$donnees['login']){
   	// Recap Compte 
   	echo 'ok';
   } 
   else { echo 'non'; } // Mot de passe oublié // }?>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>