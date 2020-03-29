<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>

<div class="accueil-img">
    <img src="https://fakeimg.pl/1920x1080/" alt="" height="800" width="100%"></img>
    <h1 class="title"> Ne jamais cesser d'explorer </h1>
</div>

<article class="Présentation">
    <h1 class="display-4">Explore et Vous</h1>
    <p class="lead">L'entreprise Explore</p>
    <hr class="my-4">
</article>

<div class="prestations">

    <section class="">
        <div class="">
            <img src="https://img.icons8.com/metro/100/000000/user-group-man-man.png" />
        </div>
        <div class="text-presta">
            <h2>Community Management </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
    </section>



    <section class="">
        <div class="text-presta">
            <h2>Formations</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
        <div class="">
            <img src="https://img.icons8.com/ios-glyphs/100/000000/businessman.png" />
        </div>
    </section>

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