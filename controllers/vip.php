<div class="form-group">
		
	<?php 
	for ($i=1; $i<6 ; $i++) { 
		?>
		<div class="form-check col-12">
			<hr>
			<label class="form-check-label">
				Jury <?php echo $i; ?> <input type="checkbox" class="alljury" data-jury="<?php echo $i.$l; ?>">
			</label> 
			<hr>
		</div>
		
		<?php 
		$reponse = $bdd->query('SELECT * from vip where id_jury='.$i.' ORDER BY id_jury asc,nom asc'); 
		$j=0;
	

		while ($donnees = $reponse->fetch()){ ?>
			<div class="form-check col-12">
				<label class="form-check-label" for="<?php echo 'jury'.$j.$i.$l ?>">
					<input type="checkbox" id="<?php echo 'jury'.$j.$i.$l ?>" name="check[]" value="<?php echo $donnees['id']; ?>" class="jury<?php echo $i.$l; ?>" data-jury="<?php echo $i.$l; ?>">
			  		<?php echo $donnees['nom'].' '.$donnees['prenom']; ?>
			  	</label>
			</div>
		<?php 
			$j=$j+1;
		}
	}


	$reponse->closeCursor(); 
	?>
</div>