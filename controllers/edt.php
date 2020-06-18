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
		while ($donnees = $reponse->fetch()) { 
			if ($bdd->query('SELECT COUNT(*) AS count FROM reservation_gerant WHERE num_chambre = '.$donnees['id'].' AND journee = "' . $date->format('Y-m-d H:i:s') . '"' )->fetch()['count'] == 1){
				$chk = 'checked';
			} else {
				$chk = '';
			}
	?>
	<div class="space">

		<input name="check[]" id="toggle<?php echo '_'.$j.'_'.$date->format('d') ;?>"  value="<?php echo $date->format('d').'_'.$donnees['id'] ?>" type="checkbox" <?php echo $chk ?>>
		<label class="label_edt" for="toggle<?php echo '_'.$j.'_'.$date->format('d') ;?>"><?php echo $donnees['num_chambre'] ?></label> 

	</div>
	
	<?php
		$j++;
		} 
	?> 
</div> 
<?php
	$reponse->closeCursor();
?>