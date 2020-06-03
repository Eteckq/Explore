<?php $title = 'Evenements'; ?>
<?php ob_start(); ?>

<h1>Evenements</h1>

<?php
foreach ($params["evenements"] as $evenement) {
?>
    <section>
        <div class="evenement">
            <div class="evthead">
                <h2><?= $evenement->title ?>  </h2>
                <p>  - le <?= $evenement->date ?></p>
            </div>
            <div class="evtbody">
                <img src="../include/images/uploaded/<?= $evenement->image ?>" alt="">
                <p><?= $evenement->description ?></p>
            </div>
        </div>
    </section>
<?php } ?>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
