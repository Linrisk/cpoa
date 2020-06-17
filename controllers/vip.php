<?php 
for ($i=1; $i<6 ; $i++) { 

	echo 'Jury :'.$i; 
	
	$reponse = $bdd->query('SELECT * from vip where id_jury='.$i.' ORDER BY id_jury asc,nom asc'); 
	$j=0;
?>
	
	<?php while ($donnees = $reponse->fetch()){ ?>
		<div class="labut">
			<input type="checkbox" id="<?php echo 'vip'.$j.$i.$l ?>" name="<?php echo 'vip'.$j ?>" value="<?php echo $donnees['nom']; ?>">
		  	<label for="<?php echo 'vip'.$j.$i.$l ?>"><?php echo $donnees['nom'].' '.$donnees['prenom']; ?></label>
		</div>
	<?php 
		$j=$j+1;
	}
}


$reponse->closeCursor(); 
?>
