<!Doctype html>
<html lang="fr">

  <meta charset="utf-8">
    <link rel="stylesheet" href="../asset/css/chambres.css">
    <link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
		<link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/> 
<head>
	<div class="header">

</div>
</head>

<body>

<label class="kappa">Capacités dispos:</label>
<hr>
<div class="integrale">

<form action="../controllers/chambres.php" class="liste" method="post">
	<?php 
	$i=1 ;
	$j=1;

	while($i<=$_SESSION["nbchambres"]){
		?>
	<div class="enum">
	<label class="enu-2"> <?php echo 'Chambre ' .$j.':   '; ?> </label>
	<input type="number" id="<?php echo $j; ?>" name="capa<?php echo $j; ?>">
	
	<?php echo '  Places' ; ?>
		<label> Numero de chambre : </label>

		<input type="number" id="<?php echo $j; ?>" name="chambre<?php echo $j; ?>">

	</div>
	<?php
	$i=$i+1;
	$j=$j+1;
	}
?>

	<div class="button">
			        <button type="submit">Valider</button>
			    </div>
</form>

</div>


</body>