<?php
	for ($i=14; $i < 25; $i++) { 
		$nb_dispo = $bdd->query('SELECT count(nb_lits)as total from chambre where id_hotel="'.$_SESSION["idh"].'" and id not in (SELECT num_chambre from reservation_gerant where journee="2014-05-'.$i.' 00:00:00" )')->fetch();
		echo '<div class="Placesdispos">Date : 2014-05-'.$i.'  |  Places dispos : '.$nb_dispo['total'].'</div>';

	}	

?>