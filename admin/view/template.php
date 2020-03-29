<?php
if(!isset($_SESSION['admin'])){
    header('Location: '.'index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<title><?= $title ?></title>
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
        <div class="row text-center fill" style="background-color: #ffffffb3">
            <!-- Partie gauche , "info"  -->
            <div class="col-sm-3">
                <?php include('view/menu.php'); ?>
                <a onClick="destroy()" href="/">DECO</a>
            </div>
            <!-- Partie droite -->
            <div class="col-sm-9">
                <?= $content ?>
            </div>
        </div>
    </div>
</body>

</html>

<script>

function destroy(){
    document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

</script>