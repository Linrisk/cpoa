<?php echo 'bienvenue dans votre première connexion ' ;?>

<!Doctype html>
<html lang="fr">

  <meta charset="utf-8">
    <link rel="stylesheet" href="../asset/css/style.css">
<head>
	<div class="header">

</div>
</head>

<body>
	
	<div class='forminscri'>
					<form action="../controllers/inscription.php"  method="post">
					<div class="nomhotel">
					<label for="name">Nom de l'hotel :</label>
			        <input type="text" id="nomhotel" name="nomhotel">
			</div >
			<div class="type">
			    <SELECT name="type" size="1">
						<OPTION>Hôtel
						<OPTION>Villa Location
						<OPTION>Air-bnb
			</SELECT>
			</div>

			<div class='adresse'>
					
					<label for="name"> Adresse :</label>
			        <input type="text" id="adresse" name="adresse">
			</div >

			<div class='description'>
					
					<label for="name">Description ( services offerts ..) :</label>
			        <input type="text" id="description" name="description">
			</div >

		    <div class='nbchambres'>
					
					<label for="name"> Nombre Chambres totales</label>
			        <input type="number" id="nbchambres" name="nbchambres">
			</div >

			         <div class="button">
			        <button type="submit">Envoyer le message</button>
			    </div>
			</form>
	</div>
</body>