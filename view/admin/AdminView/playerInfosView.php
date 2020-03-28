<?php $title = 'Liste des joueurs'; ?>
<?php ob_start(); ?>


<p>Joueur : <?= $user['pseudo'] ?> </p>


<?php $content = ob_get_clean(); ?>
<?php require('view/admin/template.php'); ?>