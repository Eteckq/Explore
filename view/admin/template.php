<?php
if(!isset($_SESSION['user_id'])){
    header('Location: '.'index.php');
}
?>

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
    <div class="container">
        <div class="row text-center fill" style="background-color: #ffffffb3">
            <!-- Partie gauche , "info"  -->
            <div class="col-sm-3">
                <?php include('view/admin/menu.php'); ?>
            </div>
            <!-- Partie droite -->
            <div class="col-sm-9">
                <?= $content ?>
            </div>
        </div>
    </div>
</body>

</html>