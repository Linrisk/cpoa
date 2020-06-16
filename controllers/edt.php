<?php
	try{
		$bdd = new PDO('mysql:host=localhost;port=3308;dbname=cpoa;charset=utf8', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e) {
		// En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}

	$i=1;
	$j=1;
	$reponse = $bdd->query('SELECT * from chambre where id_hotel="'.$_SESSION["idh"].'" ORDER BY num_chambre asc'); 
?>
<div class="okok" >
	<?php 	
		while ($donnees = $reponse->fetch()){ 
	?>
	<div class="space">
		<input id="toggle<?php echo '_'.$j.'_'.$date->format('d') ;?>" type="checkbox" checked>
		<label for="toggle<?php echo '_'.$j.'_'.$date->format('d') ;?>"><?php echo $donnees['num_chambre'] ?></label> 
	</div>
	<?php
		$j++;
		} 
	?> 
</div> 
<?php
	$reponse->closeCursor();
?>