<!Doctype html>
<html lang="fr">

  <meta charset="utf-8">
    <link rel="stylesheet" href="../asset/css/chambres.css">
<head>
	<div class="header">

</div>
</head>

<body>

<div class="integrale">

<label>Capacités dispos:</label>
<form action="../controllers/chambres.php" class="liste" method="post">
	<?php 
	$i=1 ;
	$j=1;

	while($i<=$_SESSION["nbchambres"]){
		?>
	<div class="enum">
	<label> <?php echo 'Chambre' .$j.':  '; ?> </label>
	<input type="number" id="<?php echo $j; ?>" name="capa<?php echo $j; ?>">
	
	<?php echo ' Places' ; ?>
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