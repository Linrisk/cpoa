<div class="form-group">
		
	<?php 
	for ($i=1; $i<6 ; $i++) { ?>
		<hr>
<?php
		echo '<label class="col-12"> Categorie '.$i.'</label>'; ?>
		<hr> <?php
		$reponse = $bdd->query('SELECT * from vip, films where vip.id_film=films.id_film and films.Num_Cat = '.$i.' ORDER BY Num_Cat asc,nom asc'); 
		$j=0;
	?>
	
		<?php while ($donnees = $reponse->fetch()){ ?>
			<div class="form-check col-12">
				<label class="form-check-label" for="<?php echo 'vip'.$j.$i.$l ?>">
					<input type="checkbox" id="<?php echo 'vip'.$j.$i.$l ?>" name="check[]" value="<?php echo $donnees['id']; ?>">
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