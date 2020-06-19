<!Doctype html>
<html lang="fr">

  <meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/chambres.css">
    <link href="//db.onlinewebfonts.com/c/ed0c21561b7eb2cd38dc212fe2411a65?family=FoundryMonolineOT3W08-XBd" rel="stylesheet" type="text/css"/>
		<link href="//db.onlinewebfonts.com/c/4ff9162c892f9eef8adecf6e5fcff8ea?family=FoundryMonolineOT3W08-Lt" rel="stylesheet" type="text/css"/> 
<head>
	<div class="header">

</div>
</head>

<body>

	<label class="kappa">Capacités dispos:</label>
	<hr>
	<form action="../controllers/chambres.php" class="container p-3 w-50" method="post">
		<div class="row">
		<?php 
			$i=1 ;

			while($i<=$_SESSION["nbchambres"]){ ?>
				<div class="col-6">
					<label class="float-right"> Chambre numéro :
						<input type="number" class="rounded-pill" id="<?php echo $i; ?>" name="chambre<?php echo $i; ?>" value="<?php echo $i; ?>">
					</label>
				</div>
				<div class="col-6">
					<label class="enu-2"> Nombre de places :
						<input type="number" class="rounded-pill" id="<?php echo $i; ?>" name="capa<?php echo $i; ?>" value="1">
					</label>						
				</div>
			<?php
			$i=$i+1;
			}
			?>
		</div>
		<div class="button text-center">
			<button type="submit" class="rounded-pill text-white">Valider</button>
		</div>
	</form>
</body>