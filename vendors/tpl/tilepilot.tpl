<div class="col-lg-4 col-sm-6 mb-4">
    <!--item exemple-->
    <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{$numerotile}">
            <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i id="plusaccueil" class="fas fa-plus fa-3x"></i></div>
            </div>
        </a>
        <div class="portfolio-caption">
            <div class="portfolio-caption-heading">{$titre}</div>

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
                            <!--details-->
                            <h2 class="text-uppercase">{$titre}</h2>

                            <ul class="list-inline">

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