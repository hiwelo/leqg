<?php
	// On créé le lien vers la BDD
	$dsn =  'mysql:host=' . Configuration::read('db.host') . 
			';dbname=' . Configuration::read('db.basename');
	$user = Configuration::read('db.user');
	$pass = Configuration::read('db.pass');
	
	$link = new PDO($dsn, $user, $pass);


	if (isset($_POST['id'], $_POST['info'], $_POST['type']))
	{
		// On prépare la modification
		if ($_POST['type'] == 'email')
		{
			$query = $link->prepare('UPDATE `coordonnees` SET `coordonnee_email` = :email WHERE `coordonnee_id` = :id');
			$query->bindParam(':email', $_POST['info']);
		}
		else
		{
			// On commence par retraiter le numéro de téléphone avant de préparer l'enregistrement
			$numero = preg_replace('`[^0-9]`', '', $_POST['info']);
			
			$query = $link->prepare('UPDATE `coordonnees` SET `coordonnee_numero` = :numero WHERE `coordonnee_id` = :id');
			$query->bindParam(':numero', $numero);
		}
		$query->bindParam(':id', $_POST['id']);
		
		// On exécute la modification
		$query->execute();
	}
?>