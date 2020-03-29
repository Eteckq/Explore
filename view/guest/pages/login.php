<?php $title = 'Connexion'; ?>
<?php ob_start(); ?>

<?php

	$alert ="<div class=\"alert alert-danger\" style=\"margin-top: 15px\"><p>La combinaison Pseudo/Mot de passe est incorrect !</p></div>";
?>



<div class="row text-center fill">
	<div class="col-sm-12" style="background-color: lightgrey;">
		<h2>Connexion</h2>
		<form class="login-form" action="/connect" method="post">
			<p class="login-form-content">Login :</p><input type="text" name="login"><br>
			<p class="login-form-content">Password :</p><input type="password" name="pass"><br>
			<label class="form-check-label"><input type="checkbox" name="remember">Se souvenir de moi</label><br>
			<input type="submit" value="Se connecter">
		</form>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/guest/template.php'); ?>