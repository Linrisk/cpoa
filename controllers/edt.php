<!Doctype html>
<html lang="fr">

  <meta charset="utf-8">
    <link rel="stylesheet" href="../asset/css/accueil.css">
<head>

</head>
<body>
<script language="javascript">

function ouvrirFenetre(url){
 var win = window.open(url, "popup", "toolbar=0, location=0, directories=0, status=0, scrollbars=0, resizable=0, copyhistory=0, width=500, height=350,screenX=200,screenY=200");
 win.focus();
 }

</script>
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
 
 $i=0;
 $j=0;
$reponse = $bdd->query('SELECT * from chambre where id_hotel="'.$_SESSION["idh"].'"'); 

?> <div class="okok" onClick="ouvrirFenetre('../popup.html');"> <?php 
 while ($donnees = $reponse->fetch()){
?>
<div class="space">
<?php echo $donnees['id']; ?> 
</div>

<?php
} 
?> </div> <?php
$reponse->closeCursor();


 ?>


<!-- "div<?php echo $j; ?>"> -->


</body>

<!-- 
while ($date!="05.22.2014"){
	echo $date.' : '; ?> </br> -->