<?php
session_start(); ?>
<!Doctype html>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="../asset/css/popup.css">
		<link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
		<link href="https://uvc.one/upload/iblock/c5c/c5c61232a4ad8eb3c00a9d711f5f0b37.css" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/>
	</head>
	

	<body>

	<form class="update container" action="../controllers/update.php"  method="post">
		<div class="form-row">
			<label for="nomhotel" class="col-6 text-right">Nom de l'hotel :</label>
        	<input type="text" class="col-6 rounded-pill" id="nomhotel" name="nomhotel" value="<?php echo $_SESSION["nomhotel"]; ?>">

			<label for="type" class="col-6 text-right">Type:</label>
		    <SELECT id="type" name="type" class="col-6 my-2 rounded-pill"> 
		    	<?php 
		    	$selHot='';$selVil='';$selAir='';
		    	if($_SESSION["type"]=="Hôtel"){
					$selHot='selected';
				} else if($_SESSION["type"]=="Villa Location") {
					$selAir='selected';
				} else if($_SESSION["type"]=="Air-bnb"){
					$selAir='selected';
				} ?>
				<OPTION <?php echo $selHot;?>>Hôtel</OPTION>
				<OPTION <?php echo $selVil;?>>Villa Location</OPTION>
				<OPTION <?php echo $selAir;?>>Air-bnb</OPTION>
			</SELECT>
					
			<label for="adresse" class="col-6 text-right"> Adresse :</label>
	        <input type="text" class="col-6 rounded-pill" id="adresse" name="adresse" value="<?php echo $_SESSION["adresse"]; ?>">

			<label for="description" class="col-6 text-right">Description ( services offerts ..) :</label>
	        <input type="text" id="description" class="col-6 my-2 rounded-pill" name="description" value="<?php echo $_SESSION["services"]; ?>">

		    <a onclick="fermer()" class="text-center col-12">
		    	<button type="submit">Enregistrer</button>
		    </a>
		    
		</div>
	</form>



<script type="text/javascript">
	function fermer(){

		window.newwin.close();
	}
</script>

</body>
</html>