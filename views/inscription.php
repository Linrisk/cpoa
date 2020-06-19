<!Doctype html>
<html lang="fr">

  <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
	<link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../asset/css/inscription.css">
<head>
	
</head>

<body>
	
	<div class='forminscri container'>

		<H1 class="text-center"> INSCRIPTION HEBERGEMENT </H1>
		<form action="../controllers/inscription.php"  method="post">

			<div class="form-row">
				<label for="nomhotel" class="col-5 text-right">Nom de l'hotel :</label>
	        	<input type="text" class="col-7 rounded-pill" id="nomhotel" name="nomhotel">

				<label for="type" class="col-5 text-right">Type:</label>
			    <SELECT id="type" name="type" class="col-7 my-2 rounded-pill"> 
					<OPTION>Hôtel</OPTION>
					<OPTION>Villa Location</OPTION>
					<OPTION>Air-bnb</OPTION>
				</SELECT>
						
				<label for="adresse" class="col-5 text-right"> Adresse :</label>
		        <input type="text" class="col-7 rounded-pill" id="adresse" name="adresse">

				<label for="description" class="col-5 text-right">Description ( services offerts ..) :</label>
		        <input type="text" id="description" class="col-7 my-2 rounded-pill">

		        <label for="nbchambres" class="col-5 text-right"> Nombre Chambres totales</label>
			    <input type="number" class="col-7 rounded-pill" id="nbchambres" name="nbchambres">

			    <div class="text-center col-12 my-2">
			    	<button type="submit" class="rounded-pill text-white">Valider</button>
			    </div>
			    
			</div>
		</form>
	</div>
</body>