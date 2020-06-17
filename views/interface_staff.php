<!Doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../asset/css/staff.css">
		<link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
    	<link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/>
	</head>
	<div class="header">
		<button class="accueil_retour">ACCUEIL </button>
		<a href="../controllers/deconnexion.php"><button class="deconnecter" action="../controllers/deconnexion.php">FERMER LA SESSION </button></a>
		<img src="../asset/images/logo_festival_de_cannes.png">
	</div>

	<body>

		<div class="bienvenue">
			<?php include '../controllers/bienvenue.php' ?> 
		</div>	
		<div class="tab">
			<?php for ($m=14; $m<25 ; $m++) {  ?>
				<button class="tablinks  <?php if($m==14){echo 'defaultOpen';} ?>" onclick="openCity(event, 'Interface<?php echo $m; ?>')"><?php echo '2014-05-'.$m ; ?></button>
			<?php } ?>
		</div>

		<?php for ($l=14; $l<25 ; $l++) { ?>
			<div id="Interface<?php echo $l; ?>" class="interface tabcontent">
				<div class="choix">
					<div class="heber">choix de l'hebergement </div>
					<div class="vip">choix du vip </div>
				</div>

				<div class="container">
					<form class="hebergement">
						<div class="hotel">
							<?php include '../controllers/hebergement.php' ?> 
						</div>
						<div class="container-2">
							<button>Valider</button>
							<div class="informations">

							</div>
						</div>
						
							<div class="vip-2">
				 				<?php include '../controllers/vip.php' ?> 
							</div>
							<div class="vip-3">
				 				<?php include '../controllers/vipnonjury.php' ?> 
							</div>
						
					</form>
				</div>
			</div>
		<?php } ?>

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

	</body>
</html>