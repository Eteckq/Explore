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
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/css/style.css">
    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/popper.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/bootstrap3-typeahead.js"></script>

</head>
    <body>


    <div class="container">

        

        <div class="row text-center fill" style="background-color: #ffffffb3">

            <!-- Partie gauche , "info"  -->

            <div class="col-sm-3">
                <?php include('view/admin/menuView.php'); ?>
            </div>

            <!-- Partie droite -->

            <div class="col-sm-9">

                <div class="text-center" style="margin-bottom: 35px;">
                    <div style="background-color: #000c; color: white; padding: 25px;">
                        <?= $content ?>
                    </div>
                </div>

            </div>

        </div>

        
    
    </div>


    </body>
</html>
