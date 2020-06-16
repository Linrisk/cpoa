<!Doctype html>
<html lang="fr">

  <meta charset="utf-8">
    <link rel="stylesheet" href="../asset/css/accueil.css">
<head>
	<div class="header">
		<button class="accueil_retour">Accueil </button>
		<a href="../controllers/deconnexion.php"><button class="deconnecter" action="../controllers/deconnexion.php">Deconnexion </button></a>

		<img src="../asset/images/logo_festival_de_cannes.png">
</div>

</head>

<body>
	<div class="bienvenue">
			<?php include '../controllers/bienvenue.php' ?> 
			</div>

	<div class="interface">

				<div class="modif">
				<div class="fiche_renseignement">
					<?php include '../controllers/renseignement.php' ?> 

				</div>

				<a href="../controllers/modifier.php"><button class="bouton_modif">Modifier</button></a>

				</div>

				
<select class="choix">	
				<option>2014-05-14 </option>
				<option>2014-05-15 </option>
				<option>2014-05-16 </option>
				<option>2014-05-17 </option>
				<option>2014-05-18 </option>
				<option>2014-05-19 </option>
				<option>2014-05-20 </option>
				<option>2014-05-21 </option>
				<option>2014-05-22 </option>
				<option>2014-05-23 </option>
				<option>2014-05-24 </option>

			</select>
			<div class="edt">
				<?php $date = new DateTime('2014-05-14');
				$result = $date->format('Y-m-d'); ?>
				<form class="dispos" > <?php
				while ($result!="2014-05-24"){ ?> 
					<div class="textes"><?php echo $result; ?> </div>
					<?php include '../controllers/edt.php'; 
					$date->modify('+1 day');
					$result = $date->format('Y-m-d');} ?>

				</form>

				
			
			</div>


	</div>
</body>
</html>