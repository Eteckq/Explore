<?php $title = 'Prestations'; ?>
<?php ob_start(); ?>

<div class="prestaContainer">
    <div class="prestaHead">
        <h1><?= $params["prestation"]->title ?></h1>
        <div class="image-presta">
            <i class="fas fa-<?= $params["prestation"]->image ?>"></i>
        </div>
    </div>
    <div class="prestaBody">
        <p><?= $params["prestation"]->description ?></p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
