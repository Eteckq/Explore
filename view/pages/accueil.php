<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>


<h1>ACCUEIL</h1>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>