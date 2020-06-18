<div class="form-group">
		
	<?php 
	for ($i=1; $i<6 ; $i++) { 

		echo '<label class="col-12"> Jury '.$i.'</label>'; 
		
		$reponse = $bdd->query('SELECT * from vip where id_jury='.$i.' ORDER BY id_jury asc,nom asc'); 
		$j=0;
	?>
	
		<?php while ($donnees = $reponse->fetch()){ ?>
			<div class="form-check col-12">
				<label class="form-check-label" for="<?php echo 'jury'.$j.$i.$l ?>">
					<input type="checkbox" id="<?php echo 'jury'.$j.$i.$l ?>" name="<?php echo 'vip'.$j ?>" value="<?php echo $donnees['nom']; ?>">
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