<?php

	// On récupère les informations
	$infos = $_POST;
	
	// On reformate les informations
	$nom = $core->securisation_string($infos['nom']);
	$adresse = $core->securisation_string($infos['adresse']);
	$cp = $core->securisation_string($infos['cp']);
	$bureau = $infos['bureau'];
	
	// On enregistre les modifications
	$query = 'UPDATE	bureaux
			  SET		bureau_nom = "' . $nom . '",
			  			bureau_adresse = "' . $adresse . '",
			  			bureau_cp = "' . $cp . '"
			  WHERE		bureau_id = ' . $bureau;
			  
	// On exécute la requête
	$db->query($query);
	
	// On redirige vers la page
	$core->tpl_go_to('carto', array('module' => 'bureau', 'bureau' => $bureau), true);

?>