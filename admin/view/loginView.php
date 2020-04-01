<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@3.0.0-rc.0/dist/css/coreui.min.css"
		crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
	<link rel="stylesheet" href="include/css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
	<script src="https://unpkg.com/@coreui/coreui@3.0.0-rc.0/dist/js/coreui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>

<style>
	.fake-align-vertically {
		margin-top: 10vh;
	}
</style>

<body>
	<div class="fake-align-vertically">
		<form class="login-form" action="/admin/connect" method="post">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6">
						<div class="card p-4">
							<div class="card-body">
								<h1>Login</h1>
								<p class="text-muted">Connexion au panel Admin</p>
								<form class="login-form" action="/admin/connect" method="post">
									<div class="input-group mb-3">
										<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope"></i></span>
										</div>
										<input name="mail" class="form-control" type="text" placeholder="Mail">
									</div>
									<div class="input-group mb-4">
										<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span>
										</div>
										<input name="password" class="form-control" type="password" placeholder="Password">
									</div>
									<div class="custom-control custom-checkbox mb-4">
										<input type="checkbox" class="custom-control-input" name="remember" id="remember">
										<label class="custom-control-label" for="remember">Se sourvenir de moi</label>
									</div>
									<div class="row">
										<div class="col-6">
											<button class="btn btn-primary px-4" type="submit">Login</button>
										</div>
										<div class="col-6 text-right">
											<button class="btn btn-link px-0" type="button"><a href="/">Retour</a></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>

</html>