<?php $title = 'Evenements'; ?>
<?php ob_start(); ?>

    <?php
    foreach ($params["evenements"] as $evenement) {
    ?>
    <section>
            <div class="evenement">
                <h2><?= $evenement->title ?></h2>
                <p><?= $evenement->description ?></p>
            </div>
    </section>
<?php } ?>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>