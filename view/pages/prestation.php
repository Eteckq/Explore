<?php $title = 'Prestations'; ?>
<?php ob_start(); ?>

<!-- On aura peut être une image dans le future, à prévoir ? -->
<h1><?= $params["prestation"]->title ?></h1>

<p><?= $params["prestation"]->description ?></p>




<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>