<?php $title = 'Prestations'; ?>
<?php ob_start(); ?>

<h1><?= $params["prestation"]->title ?></h1>

<div class="prestaContainer">
    <div class="image-presta">
        <i class="fas fa-<?= $params["prestation"]->image ?>"></i>
    </div>
    <p><?= $params["prestation"]->description ?></p>
</div>





<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
