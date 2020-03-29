<!DOCTYPE html>

<html>

<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="include/css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="text-center" style="background-color: lightblue;">

			<div class="col-sm-12">
				<?php require('view/guest/header.php'); ?>
				<?php require('view/guest/menu.php'); ?>
			</div>

			<div class="col-sm-12">
				<?= $content ?>
				<?php require('view/guest/footer.php'); ?>
			</div>
		</div>
	</div>
</body>

</html>