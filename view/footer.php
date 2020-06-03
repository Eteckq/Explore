      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6">
                  <h6>à propos</h6>
                  <p class="text-justify">Explore et Vous est une entreprise suivant la continuité de développement du réseau Explore. En effet, Explore est un réseau communautaire sur Instagram développé sur plusieurs régions dont notamment la région Auvergne-Rhône Alpes ayant pour but de promouvoir les paysages, les entreprises et les activités locales régionales.</p>
              </div>

              <div class="col-xs-6 col-md-3">
                  <h6>Liens</h6>
                  <ul class="footer-links">
                      <li><a href="/accueil">Accueil</a></li>
                      <li><a href="/contact">Qui sommes-nous ?</a></li>
                      <li><a href="/events">Événements</a></li>
                  </ul>
              </div>

              <div class="col-xs-6 col-md-3">
                  <h6>Prestations</h6>
                  <ul class="footer-links">
                      <?php foreach ($prestations as $prestation) { ?>
                          <li><a href="/prestation-<?= $prestation->id ?>"><?= $prestation->title ?></a></li>
                      <?php } ?>
                  </ul>
              </div>
          </div>
          <hr>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">&copy; 2020 All Rights Reserved by Explore.
                  </p>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                      <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
