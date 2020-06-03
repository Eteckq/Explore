<ul>
    <li>
        <a href="/accueil">Accueil</a>
    </li>
    <li>
        <a href="/contact">Qui sommes-nous ?</a>
    </li>
    <li>
        <a href="/events">Evenements</a>
    </li>
    <li>
        <div class="dropdown">
            <button class="dropbtn">Prestations &#8893;</button>
            <div class="dropdown-content">
                <?php foreach ($prestations as $prestation) { ?>
                <a href="/prestation-<?= $prestation->id ?>"><?= $prestation->title ?></a>
                <?php } ?>
            </div>
        </div>
    </li>
</ul>
