<?php 
for ($i=1; $i<62 ; $i++) { 

	
	
	$reponse = $bdd->query('SELECT * from vip where id_film='.$i.' ORDER BY id_film asc,nom asc'); 
	$j=0;
?>
	
	<?php while ($donnees = $reponse->fetch()){ ?>
		<div class="labutt">
			<input type="checkbox" id="<?php echo 'vipp'.$j.$i.$l ?>" name="<?php echo 'vipp'.$j ?>" value="<?php echo $donnees['nom']; ?>">
		  	<label for="<?php echo 'vipp'.$j.$i.$l ?>"><?php echo $donnees['nom'].' '.$donnees['prenom']; ?></label>
		</div>
	<?php 
		$j=$j+1;
	}
}


$reponse->closeCursor(); 
?>
