<div class="col-lg-4 col-sm-6 mb-4">
    <!--item1-->
    <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{$numerotile}">
            <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i id="plusaccueil" class="fas fa-plus fa-3x"></i></div>
            </div>

        </a>
        <div class="portfolio-caption">
            <div class="portfolio-caption-heading">{$titreoffre}</div>
            <div class="portfolio-caption-subheading text-muted">{$nomentreprise}</div>
        </div>
    </div>
</div>


<div class="portfolio-modal modal fade" id="portfolioModal{$numerotile}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal"/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">{$titreoffre}</h2>
                            <p class="item-intro text-muted">{$nomentreprise}</p>

                            <p>{$description}</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Lieu:</strong> {$lieu}
                                </li>
                                <li>
                                    <strong>Base de remuneration:</strong> {$remuneration}
                                </li>
                                <li>
                                    <strong>Date de debut:</strong> {$datedebut}
                                </li>
                                <li>
                                    <strong>Date de fin:</strong> {$datefin}
                                </li>

                                <li>
                                    <strong>Date de publication de l'offre:</strong> {$datepublication}
                                </li>
                                <li>
                                    <strong>Durée du stage:</strong> {$duree}
                                </li>
                                <li>
                                    <strong>Competence:</strong> {$skill}
                                </li>

                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit" value="close">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    value="wishlist">
                                <a style="color: white; text-decoration: none;">wishlist</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>