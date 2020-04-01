<?php $title = 'Prestations'; ?>
<?php ob_start(); ?>

<!-- met des $ devant les variables qui vont changer -->
<h1>$NOM DE LA PRESTATION</h1>

<p>$DESCRIPTION</p>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>