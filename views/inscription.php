<!Doctype html>
<html lang="fr">

  <meta charset="utf-8">
    <link rel="stylesheet" href="../asset/css/inscription.css">
    <link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
		<link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/>
<head>
	
</head>

<body>
	
	<div class='forminscri'>

		<H1> INSCRIPTION HEBERGEMENT </H1>
					<form action="../controllers/inscription.php"  method="post">
					<div class="nomhotel">
					<label for="name">Nom de l'hotel :</label>
			        <input type="text" id="nomhotel" name="nomhotel">
			</div >
			<div class="type">
				<label for="name">Type :</label>
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
			        <button type="submit">Valider</button>
			    </div>
			</form>
	</div>
</body>