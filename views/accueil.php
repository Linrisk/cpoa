<!Doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../asset/css/accueil.css">
		<link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
		<link href="https://uvc.one/upload/iblock/c5c/c5c61232a4ad8eb3c00a9d711f5f0b37.css" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/>
	</head>
	<div class="header">
		<button class="accueil_retour">ACCUEIL </button>
		<a href="../controllers/deconnexion.php"><button class="deconnecter" action="../controllers/deconnexion.php">FERMER LA SESSION </button></a>
		<img src="../asset/images/logo_festival_de_cannes.png">
	</div>

	<body>

		<script>
function myFunction() {
  alert("Modifications éffectuées!");
}


function openWin(url){
newwin=window.open(url,'','width=400,height=400,top=200,left=200');
if(newwin){
window.onfocus=function(){newwin.window.close()}
}
}

</script>



		<div class="bienvenue">
			<?php include '../controllers/bienvenue.php' ?> 
		</div>	

		<div class="interface" >

			<div class="modif">
				<div class="fiche_renseignement">
					<?php include '../controllers/renseignement.php' ?> 
				</div>


				<a href="popup.php" onClick="openWin(this.href);return false"><button>Modifier</button></a>
			</div>
			<div class="compteur">
				<?php include '../controllers/nbdispo.php' ?>
		</div>
		 	<button class="bouton_valid" onclick="document.getElementsByClassName('dispos')[0].submit()">Enregistrer</button>

			<div class="edt">

				<?php 
					$date = new DateTime('2014-05-14');
					$result = $date->format('Y-m-d'); 
				?>
				<form class="dispos" action="../controllers/validation_dispo.php" method="post" > 
					<?php while ($result!="2014-05-24"){ ?> 
						<div class="textes"><?php echo $result; ?></div>
						<?php include '../controllers/edt.php'; 
						$date->modify('+1 day');
						$result = $date->format('Y-m-d');
					} ?>
				</form>

			</div>
		</div>
	</body>

	<footer>
		<hr>
	</footer>
</html>