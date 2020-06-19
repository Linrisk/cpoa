<?php 


$reponse = $bdd->query('SELECT * from hebergement '); 
$j=0;

while ($donnees = $reponse->fetch()){ ?>
	<div class="form-check">
		<hr>
		<div class="form-row">
			<label class="form-check-label col-7" for="<?php echo 'choix'.$j ?>">
				<input type="radio" id="<?php echo 'choix'.$j ?>" name="box" value="<?php echo $donnees['id']; ?>">
				<?php echo $donnees['Nom']; ?>
			</label>
			<label class="col-5">
				<?php 
				$nb_dispo = $bdd->query('SELECT count(nb_lits) as total 
										 from chambre 
										 where id_hotel="'. $donnees['id'].'" 
										 and id not in (SELECT num_chambre 
										 				from reservation_gerant 
										 				where journee="2014-05-'.$l.' 00:00:00" )'
										 )->fetch()['total']; 
				echo 'nb place : '. $nb_dispo ;
				?>
			</label>

		</div>
		<hr>
	</div>
	
<?php 
	$j=$j+1;
}		

$reponse->closeCursor(); 
?>

