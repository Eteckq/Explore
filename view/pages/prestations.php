<?php $title = 'Prestations'; ?>
<?php ob_start(); ?>


<h1>Articles</h1>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>