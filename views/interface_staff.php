<!Doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="../asset/css/staff.css">
		<link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
		<link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/>
	</head>

	<body>
		<div class="container-fluid header">
			<div class="col-4">
				<div class="row h-100">
					<button class="col accueil_retour">ACCUEIL</button>
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

		<div class="tab">
			<?php for ($m=14; $m<25 ; $m++) {  ?>
				<button class="tablinks  <?php if($m==14){echo 'defaultOpen';} ?>" onclick="openCity(event, 'Interface<?php echo $m; ?>')"><?php echo '2014-05-'.$m ; ?></button>
			<?php } ?>
		</div>

		<?php for ($l=14; $l<25 ; $l++) { ?>
			<div id="Interface<?php echo $l; ?>" class="interface tabcontent toresize container">
				<form class="hebergement h-100">
					<div class="form-row h-100">
						<div class="col hotel h-100 overflow-auto">
							<h1>choix de l'hebergement</h1>
							<?php include '../controllers/hebergement.php' ?> 
						</div>
						<div class="col container-2">
							<button>Valider</button>
							<div class="informations">

							</div>
						</div>
						
						<div class="col vip-2 h-100 overflow-auto">
							<h1>choix du jury</h1>
			 				<?php include '../controllers/vip.php' ?> 
						</div>
						<div class="col vip-3 h-100 overflow-auto">
							<h1>choix du vip</h1>
			 				<?php include '../controllers/vipnonjury.php' ?> 
						</div>
					</div>
				</form>
			</div>
		<?php } ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function openCity(evt, tab) {
			  	// Declare all variables
			  	var i, tabcontent, tablinks;

			  	// Get all elements with class="tabcontent" and hide them
			  	tabcontent = document.getElementsByClassName("tabcontent");
			  	for (i = 0; i < tabcontent.length; i++) {
			    	tabcontent[i].style.display = "none";
			  	}

			  	// Get all elements with class="tablinks" and remove the class "active"
			  	tablinks = document.getElementsByClassName("tablinks");
			  	for (i = 0; i < tablinks.length; i++) {
			    	tablinks[i].className = tablinks[i].className.replace(" active", "");
			  	}

			  	// Show the current tab, and add an "active" class to the button that opened the tab
			  	document.getElementById(tab).style.display = "block";
			  	evt.currentTarget.className += " active";
			}
			document.getElementsByClassName("defaultOpen")[0].click();
		</script>
		<script src="../asset/js/resize.js"></script>

	</body>
</html>