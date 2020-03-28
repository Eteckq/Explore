<!DOCTYPE html>

<html>
<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/css/style.css">
    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/popper.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/bootstrap3-typeahead.js"></script>
</head>
<body>
	<div class="container-fluid">

				<div class="text-center" style="background-color: lightblue;">

					<div class="col-sm-12">
						<?php require('view/guest/headerView.php'); ?>
						<?php require('view/guest/menu.php'); ?>
					</div>

					<div class="col-sm-12">
						<?= $content ?>
						<?php require('view/guest/footerView.php'); ?>
					</div>
				</div>

	</div>
</body>
</html>