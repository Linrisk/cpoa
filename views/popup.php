<?php
session_start(); ?>
<!Doctype html>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../asset/css/popup.css">
		<link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
		<link href="https://uvc.one/upload/iblock/c5c/c5c61232a4ad8eb3c00a9d711f5f0b37.css" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/>
	</head>
	

	<body>

	<form  class="update" action="../controllers/update.php"  method="post">
					<div class="nomhotel">
					<label for="name">Nom de l'hotel :</label>
			        <input type="text" id="nomhotel" name="nomhotel" value="<?php echo $_SESSION["nomhotel"]; ?>">
			</div >
			<div class="type">
				<label for="type">Type:</label>
			    <SELECT  name="type" size="1" > <?php
			    if($_SESSION["type"]=="Hôtel"){?>
						<OPTION selected>Hôtel <?php }
			    if($_SESSION["type"]=="Villa Location") {?>

						<OPTION>Villa Location  <?php }
			    if($_SESSION["type"]=="Air-bnb"){?>
						<OPTION>Air-bnb
						<?php } ?>
			</SELECT>
			</div>

			<div class='adresse'>
					
					<label for="name"> Adresse :</label>
			        <input type="text" id="adresse" name="adresse" value="<?php echo $_SESSION["adresse"]; ?>">
			</div >

			<div class='description'>
					      
					<label for="name">Description ( services offerts ..) :</label>
			        <input type="text" id="description" name="description" value="<?php echo $_SESSION["services"]; ?>">
			</div >


			         <div class="button">
			        <button type="submit">Modifier</button>
			    </div>
			</form>

</body>
</html>