<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>

<div class="accueil-img">
    <img src="/include/images/background.jpg" alt="" height="200%" width="100%"></img>
    <h1 class="title"> Ne jamais cesser d'explorer </h1>
</div>

<article class="Présentation">
    <h1 class="display-4">Explore et Vous</h1>
    <p class="lead">Explore et Vous est une entreprise suivant la continuité de développement du réseau Explore. En effet, Explore est un réseau communautaire sur Instagram développé sur plusieurs régions dont notamment la région Auvergne-Rhône Alpes
        ayant pour but de promouvoir les paysages, les entreprises et les activités locales régionales. Nous souhaitons la création d’un site internet spécifique pour l’entreprise Explore et Vous. Cette dernière est une entreprise de marketing et de
        communication digitale à part entière. L’objectif est d’aider les entreprises de type PME/TPE à se développer numériquement, à établir une stratégie digitale efficace et qualitative afin de leur permettre d’améliorer leur visibilité et leur
        fidélisation à travers les Nouvelles Techniques de l’Information et de la Communication (NTIC). Pour ce faire, Explore et Vous propose différents services tels que de la formation, le Community management propre à son identité, de la mise en
        avant sur le réseau Explore ou encore la prise de photographie afin de diversifier les formes de communication de chaque partenaire. Cependant chaque client a des envies et des besoins différents, ainsi Explore et Vous assure un suivi régulier
        après la mise en place des outils afin de montrer aux TPE/PME l’efficacité de leur stratégie web. L’objectif est alors d’adapter notre offre pour chaque demande et souhait de nos clients. C’est pourquoi, l’offre d'Explore et Vous sera réalisée
        à travers une grille tarifaire et également sur devis afin d’adapter au mieux son offre à chaque client.</p>
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
