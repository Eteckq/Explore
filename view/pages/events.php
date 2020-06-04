<?php $title = 'Evenements'; ?>
<?php ob_start(); ?>

<h1>Evenements</h1>

<?php
foreach ($params["evenements"] as $evenement) {
?>
    <section>
        <div class="evenement">
            <div class="evtHead">
                <div class="evtTitle">
                    <h2><?= $evenement->title ?>  </h2>
                    <p>  - le <?= $evenement->date ?></p>
                </div>
                <img src="../include/images/uploaded/<?= $evenement->image ?>" alt="">
            </div>
            <div class="evtBody">
                <p><?= $evenement->description ?></p>
            </div>
        </div>
    </section>
<?php } ?>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
