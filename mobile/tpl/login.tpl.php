	<form action="<?php $core->tpl_get_url('login'); ?>" method="post">
		<ul>
			<div>
				<li>
					<label for="form-login">Nom d'utilisateur</label>
					<input type="text" name="login" id="form-login" placeholder="email" autocomplete="off">
				</li>
			</div>
			<div>
				<li>
					<label for="form-pass">Mot de passe</label>
					<input type="password" name="pass" id="form-pass">
				</li>
			</div>
			<div>
				<li class="submit">
					<input type="submit" value="Se connecter">
				</li>
			</div>
		</ul>
	</form>
	
	<?php if (isset($_GET['erreur']) && $_GET['erreur'] == 'login') { ?><div id="erreur">Erreur login</div><?php } ?>
	<?php if (isset($_GET['erreur']) && $_GET['erreur'] == 'pass') { ?><div id="erreur">Erreur pass</div><?php } ?>