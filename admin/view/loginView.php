<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
	<link rel="stylesheet" href="include/css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>

<body>
	<div class="container">
		<a href="/">retour</a>
		<h2>Connexion</h2>
		<form class="login-form" action="/admin/connect" method="post">
			<p class="login-form-content">Login :</p><input type="text" name="login"><br>
			<p class="login-form-content">Password :</p><input type="password" name="pass"><br>
			<label class="form-check-label"><input type="checkbox" name="remember">Se souvenir de moi</label><br>
			<input type="submit" value="Se connecter">
		</form>
	</div>
</body>

</html>