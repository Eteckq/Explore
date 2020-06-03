<!DOCTYPE html>

<html>

<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css">
	<link rel="stylesheet" href="include/css/style.css">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>

	<header>
		<div class="logo">
			<img src="/include/images/logo.svg" alt="Explore logo" width="250px" height="250px" />
		</div>

		<nav>
			<?php require('view/menu.php'); ?>
		</nav>
	</header>
	<div class="content text-center">
		<?= $content ?>
	</div>

	<footer class="site-footer">
		<?php require('view/footer.php'); ?>
	</footer>

</body>

</html>
