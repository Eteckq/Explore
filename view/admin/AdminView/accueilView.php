<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>


<p style="font-size: 125px;">Bonjour</p>


<?php $content = ob_get_clean(); ?>
<?php require('view/admin/template.php'); ?>