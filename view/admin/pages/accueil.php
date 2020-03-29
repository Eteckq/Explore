<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>




<div class="row text-center fill">
	<h1>Admin accueil</h1>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/admin/template.php'); ?>