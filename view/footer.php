      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6">
                  <h6>à propos</h6>
                  <p class="text-justify">Cette dernière est une entreprise de marketing et de communication digitale à part entière. L’objectif est d’aider les entreprises de type PME/TPE à se développer numériquement, à établir une stratégie digitale efficace et qualitative afin de leur permettre d’améliorer leur visibilité et leur fidélisation à travers les Nouvelles Techniques de l’Information et de la Communication (NTIC).</p>
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