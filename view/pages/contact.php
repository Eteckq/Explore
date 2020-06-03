<?php $title = 'Contact'; ?>
<?php ob_start(); ?>

<h1>Qui sommes-nous ?</h1>

<div class="contactContainer">
    <img src="../../include/images/val.jpg" alt="">
    <div class="contactBody">
        <p>Explore et Vous est une entreprise suivant la continuité de développement du réseau Explore. En effet, Explore est un réseau communautaire sur Instagram développé sur plusieurs régions dont notamment la région Auvergne-Rhône Alpes ayant pour but de promouvoir les paysages, les entreprises et les activités locales régionales. Nous souhaitons la création d’un site internet spécifique pour l’entreprise Explore et Vous. Cette dernière est une entreprise de marketing et de communication digitale à part entière. L’objectif est d’aider les entreprises de type PME/TPE à se développer numériquement, à établir une stratégie digitale efficace et qualitative afin de leur permettre d’améliorer leur visibilité et leur fidélisation à travers les Nouvelles Techniques de l’Information et de la Communication (NTIC).</p>
        <p>Pour ce faire, Explore et Vous propose différents services tels que de la formation, le Community management propre à son identité, de la mise en avant sur le réseau Explore ou encore la prise de photographie afin de diversifier les formes de communication de chaque partenaire. Cependant chaque client a des envies et des besoins différents, ainsi Explore et Vous assure un suivi régulier après la mise en place des outils afin de montrer aux TPE/PME l’efficacité de leur stratégie web. L’objectif est alors d’adapter notre offre pour chaque demande et souhait de nos clients. C’est pourquoi, l’offre d'Explore et Vous sera réalisée à travers une grille tarifaire et également sur devis afin d’adapter au mieux son offre à chaque client.</p>
    </div>
</div>




<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Contactez-nous !</h3>
            <hr>
            <address>
                <strong>Email :</strong> <a href="mailto:#"> name@domain.com</a><br><br>
                <strong>Téléphone :</strong> 06-12-34-56-78
            </address>
        </div>

        <div class="col-sm-8 contact-form">
            <form id="contact" method="post" class="form" role="form">
                <div class="row">
                    <div class="col-xs-6 col-md-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
                    </div>
                    <div class="col-xs-6 col-md-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                    </div>
                </div>
                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                <br />
                <div class="row">
                    <div class="col-xs-12 col-md-12 form-group">
                        <button class="btn btn-primary pull-right" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>
