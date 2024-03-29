<!Doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="../asset/css/accueil.css">
		<link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
		<link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/>
	</head>

	<body>
		<div class="container-fluid header">
			<div class="col-4">
				<div class="row h-100">
					<a class="col h-100" href="../controllers/deconnexion.php"><button class="deconnecter h-100" action="../controllers/deconnexion.php">FERMER LA SESSION </button></a>
				</div>
			</div>
			<div class="col-8">
				<div class="float-right w-100 h-100"><img src="../asset/images/logo_festival_de_cannes.png" class="header_logo"></div>
			</div>
		</div>

		<div class="container-fluid pl-0 my-3">
			<div class="bienvenue col-6 col-md-5 col-lg-4 ml-0">
				<?php include '../controllers/bienvenue.php' ?> 
			</div>
		</div>
		

		<div class="container toresize">
			<div class="row h-100 int">
				<div class="col-4">
					<div class="row h-100">
						<div class="col-12 text-center mt-3">
							<label id="logement" class="my-auto">MON LOGEMENT</label>
						</div>
						<div class="col-12">
							<div class="fiche_renseignement w-75 p- mx-auto">
								<?php include '../controllers/renseignement.php' ?> 
							</div>
						</div>
						<a class="col-12 text-center" href="popup.php" onclick="openWin(this.href);return false">
							<button id="modif">Modifier</button>
						</a>

						<div class="col-12 px-5">
							<div class="nbdisp row my-2">
								<?php include '../controllers/nbdispo.php' ?>
							</div>
						</div>
						
						<div class="col-12">
						 	<button class="bouton_valid float-right" onclick="document.getElementsByClassName('dispos')[0].submit()">Enregistrer</button>
						</div>
					</div>
				</div>
				<div class="col-8 h-100 overflow-auto">

					<?php 
						$date = new DateTime('2014-05-14');
						$result = $date->format('Y-m-d'); 
					?>
					<form class="dispos" action="../controllers/validation_dispo.php" method="post" > 
						<?php while ($result!="2014-05-24"){ ?> 

							<div class="textes"><?php echo $result; ?></div>
							<hr>
							<?php include '../controllers/edt.php'; 
							$date->modify('+1 day');
							$result = $date->format('Y-m-d');
						} ?>
					</form>

				</div>
			</div>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script>
			function myFunction() {
			  alert("Modifications éffectuées!");
			}

			function openWin(url){
				newwin=window.open(url,'','width=600,height=200,top=200,left=200');
				if(newwin){
					window.onfocus=function(){newwin.window.close()}
				}
			}
		</script>
		<script src="../asset/js/resize.js"></script>
		
		<footer>
			<hr>
		</footer>
	</body>
</html>