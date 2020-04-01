<div class="bottom-menu">
    <div class="">
        <a href="#">Accueil</a>
        <a href="#">Explore et Vous</a>
        <a href="#">Le réseau Explore</a>
        <a href="#">(Deuxième site)</a>
    </div>
    <div class="">
        <a href="#">Prestations</a>
        <div class="submenu-presta">
            <?php foreach ($prestations as $prestation) { ?>
            <a href="/prestation-<?= $prestation->id ?>"><?= $prestation->title ?></a>
            <?php } ?>
        </div>
    </div>
    <div class="">
        <a href="#">Contact</a>
        <a href="#">Mentions légales</a>
        <span class="social-links">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </span>
    </div>
</div>