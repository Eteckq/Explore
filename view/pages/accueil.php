<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>

<div class="accueil-img">
    <img src="/include/images/background.jpg" alt="" height="200%" width="100%"></img>
    <h1 class="title"> Ne jamais cesser d'explorer </h1>
</div>

<article class="Présentation">
    <h1 class="display-4">Explore et Vous</h1>
    <p class="lead">L'entreprise Explore</p>
    <hr class="my-4">
</article>

<div class="prestations">

    <?php
    $i = 0;

    foreach ($prestations as $prestation) {
    $i++;
    ?>
    <a href="/prestation-<?= $prestation->id ?>">
    <section>

        <?php if($i%2 == 0){ ?>

        <div class="image-presta">
            <i class="fas fa-<?= $prestation->image ?>"></i>
        </div>
        <div class="text-presta">
            <h2><?= $prestation->title ?></h2>
            <p><?= $prestation->description ?></p>
        </div>
        <?php } else { ?>
        <div class="text-presta">
            <h2><?= $prestation->title ?></h2>
            <p><?= $prestation->description ?></p>
        </div>
        <div class="image-presta">
            <i class="fas fa-<?= $prestation->image ?>"></i>
        </div>
        <?php } ?>

    </section>
    </a>
    <?php } ?>




</div>

<div id="carouselPartenaires" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://fakeimg.pl/1000x300/" height="300px" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Partenaire 1</h5>
                <p>bla bla bla</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://fakeimg.pl/1000x300/" height="300px" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Partenaire 2</h5>
                <p>bla bla bla</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://fakeimg.pl/1000x300/" height="300px" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Partenaire 3</h5>
                <p>bla bla bla</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselPartenaires" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselPartenaires" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
