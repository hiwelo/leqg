<?php
	// On récupère l'ID de la fiche à modifier
	$interaction = $historique->recherche($_GET['interaction']);
?>
<div id="modifierFiche">
	<h6>Modification de l'interaction n°<?php $historique->elementActuel(); ?></h6>
	
	<form action="ajax.php?script=modification-interaction" method="post">
	<input type="hidden" name="fiche" value="<?php $fiche->infos('id'); ?>">
	<input type="hidden" name="interaction" value="<?php $historique->elementActuel(); ?>">
		<ul class="ficheInteraction">
			<li><!--
			 --><label for="form-type">Type</label><!--
			 --><select id="form-type" name="type">
					<option value="contact"<?php if ($interaction['type'] == 'contact') { echo ' selected'; } ?>>Entrevue</option>
					<option value="telephone"<?php if ($interaction['type'] == 'telephone') { echo ' selected'; } ?>>Entretien téléphonique</option>
					<option value="courrier"<?php if ($interaction['type'] == 'courrier') { echo ' selected'; } ?>>Courrier postal</option>
					<option value="email"<?php if ($interaction['type'] == 'email') { echo ' selected'; } ?>>Courrier électronique</option>
					<option value="autre"<?php if ($interaction['type'] == 'autre') { echo ' selected'; } ?>>Autre</option>
			 	</select><!--
		 --></li>
			<li><!--
			 --><label for="form-date">Date</label><!--
			 --><input type="text" id="form-date" name="date" value="<?php echo date('d/m/Y', strtotime($interaction['date'])); ?>" placeholder="jj/mm/aaaa" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01])/(0[1-9]|1[012])/[0-9]{4}"><!--
		 --></li>
			<li><!--
			 --><label for="form-lieu">Lieu</label><!--
			 --><input type="text" id="form-lieu" name="lieu" value="<?php echo $interaction['lieu']; ?>"><!--
		 --></li>
			<li><!--
			 --><label for="form-objet">Objet</label><!--
			 --><input type="text" id="form-objet" name="objet" value="<?php echo $interaction['objet']; ?>"><!--
		 --></li>
			<li><!--
			 --><label for="form-notes" class="textarea">Notes</label><!--
			 --><textarea id="form-notes" name="notes"><?php echo $interaction['notes']; ?></textarea><!--
		 --></li>
		 	<li class="submit"><!--
		 	 --><input type="submit" value="Sauvegarder les modifications">
		 	</li>
		</ul>
	</form>
</div>