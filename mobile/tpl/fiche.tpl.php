<section id="fiche">
	<header>
		<h2><?php $fiche->affichage_nom('span'); ?></h2>
	</header>
	
	<ul class="infos">
		<?php if ($fiche->is_info('naissance_date')) : ?>
		<li class="age">
			<p>Né le <?php $fiche->date_naissance('/'); ?> (<strong><?php $fiche->age(); ?></strong>)</p>
		</li>
		<?php endif; ?>
		<li class="adresse">
			<?php if ($fiche->get_immeuble()) : $carto->adressePostale($fiche->get_immeuble()); else : echo 'Aucune adresse connue'; endif; ?>
		</li>
		<?php if (!empty($fiche->get_infos('email'))) : ?>
		<li class="email">
			<?php $fiche->contact('email', true); ?>
		</li>
		<?php endif; ?>
		<?php if (!empty($fiche->get_infos('mobile'))) : ?>
		<li class="mobile">
			<a href="tel:<?php $fiche->contact('mobile'); ?>"><?php $core->tpl_phone($fiche->contact('mobile', false, true)); ?></a>
		</li>
		<?php endif; ?>
		<?php if (!empty($fiche->get_infos('telephone'))) : ?>
		<li class="fixe">
			<a href="tel:<?php $fiche->contact('telephone'); ?>"><?php $core->tpl_phone($fiche->contact('telephone', false, true)); ?></a>
		</li>
		<?php endif; ?>
	</ul>
</section>

<section id="historique">
	&nbsp;
	
	<nav id="actions-fiche">
		<a href="#" id="retourDepuisHistorique" class="retour">&#xe813;</a>
	</nav>
</section>

<nav id="actions-fiche">
	<a href="#" id="goToHistorique" class="historique">&#xe8dd;</a>
	<a href="#" id="goToModif" class="modifier">&#xe855;</a>
</nav>