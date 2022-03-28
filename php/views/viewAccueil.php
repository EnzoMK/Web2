

<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>

<?php $objSmarty->display("../vendors/tpl/head.tpl"); ?>

<body id="page-top">
<!-- Navigation-->
<?php $objSmarty->display("../vendors/tpl/bandeau_haut.tpl"); ?>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Trouvez un stage maintenant !</div>
        <div class="masthead-heading text-uppercase">Bienvenue dans l'arèneuh !</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Let's go</a>
    </div>
</header>
<!-- recherches -->
<div class="p-3 bg-dark text-white row">
    <nav class="navbar">
        <div class="container bg-dark text-white row p-2 ">
            <form action="viewRechercheAvance.php" method="get" novalidate="novalidate">
                <div class="row">
                    <!-- Liste de filtre -->
                    <div class="col-lg-5 px-2">
                        <select class="form-control search-slt" id="filtreacceuil">
                            <option>Rechercher</option>
                            <option>Un étudiant</option>
                            <option>Un pilote</option>
                            <option>Une offre de stage</option>
                            <option>Une entreprise</option>
                            <option>Une délégué</option>
                        </select>
                    </div>
                    <!-- Bouton lancer la recherche -->
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <button type="button" class="btn btn-info wrn-btn"> GO !</button>
                    </div>
                    <!-- Aller vers la page de recherche avancée -->
                    <form method='POST'>
                        <div class="col-lg-3">
                            <button style="text-decoration: none; color: white;"type="button" name="buttonRechercheAvancee" class="btn btn-info wrn-btn" onClick='window.location.href="?url=rechercheavancee"'>Page recherche avancée</button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </nav>
</div>
<!--Offres-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Meilleurs Offres</h2>
            <h3 class="section-subheading text-muted">Vous pouvez retrouver nos offres les plus interressantes</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!--item1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage en développement Logiciel</div>
                        <div class="portfolio-caption-subheading text-muted">Airbus</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!--item2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage en développement Web</div>
                        <div class="portfolio-caption-subheading text-muted">Orange</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!--item3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage Assistant Cyber-sécurité</div>
                        <div class="portfolio-caption-subheading text-muted">Sopra Steria</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- item4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage en développement informatique</div>
                        <div class="portfolio-caption-subheading text-muted">Crédit Agricole</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!--item5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage Optimisation Base de Données</div>
                        <div class="portfolio-caption-subheading text-muted">SNCF</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- item6-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage en Analyse de données</div>
                        <div class="portfolio-caption-subheading text-muted">SFR</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Détails Offres -->
<!-- item1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal"/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Stage en développement Logiciel</h2>
                            <p class="item-intro text-muted">Airbus</p>
                            
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Lieu:</strong> Orléans
                                </li>
                                <li>
                                    <strong>Contact:</strong> erkljgnerq@airbus.fr
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <a href="html\editionHome.html" style="color: white; text-decoration: none;">Editer</a>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--item 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal"/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Stage en développement Web</h2>
                            <p class="item-intro text-muted">Orange</p>
                            
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Lieu:</strong> Tours
                                </li>
                                <li>
                                    <strong>Contact:</strong> bapt.ouee@orange.fr
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <a href="html\editionHome.html" style="color: white; text-decoration: none;">Editer</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--item 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal"/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Stage Assistant Cyber-sécurité</h2>
                            <p class="item-intro text-muted">Sopra Steria</p>
                            
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Lieu:</strong> Orléans-la-source
                                </li>
                                <li>
                                    <strong>Contact:</strong> fk.hich@sopra.fr
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <a href="html\editionHome.html" style="color: white; text-decoration: none;">Editer</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--item 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal"/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Stage en développement informatique</h2>
                            <p class="item-intro text-muted">Crédit Agricole</p>
                            
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Lieu:</strong> Olivet
                                </li>
                                <li>
                                    <strong>Contact:</strong> armde@ca.fr
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <a href="html\editionHome.html" style="color: white; text-decoration: none;">Editer</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--item 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal"/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Stage Optimisation Base de Données</h2>
                            <p class="item-intro text-muted">SNCF</p>
                            
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Lieu:</strong> Fleury-les-Aubrais
                                </li>
                                <li>
                                    <strong>Contact:</strong> jacki.lflflfl@sncf.fr
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <a href="html\editionHome.html" style="color: white; text-decoration: none;">Editer</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--item 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal"/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Stage en Analyse de données</h2>
                            <p class="item-intro text-muted">SFR</p>
                           
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Lieu:</strong> Orléans
                                </li>
                                <li>
                                    <strong>Contact:</strong> jack.echel@sfr.fr
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttoncreer">
                                <a href="html\editionHome.html" style="color: white; text-decoration: none;">Editer</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Notre équipe</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="../assets/img/team/1.webp" alt="..."/>
                    <h4>Guillaume Duboys</h4>
                    <p class="text-muted">L'investisseur</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="../assets/img/team/2.webp" alt="..."/>
                    <h4>Antoine Favereau</h4>
                    <p class="text-muted">Assistant café</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="../assets/img/team/3.webp" alt="..."/>
                    <h4>Timeo Villette</h4>
                    <p class="text-muted">Le cuistot</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <form method='GET'>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>

                <button onclick='window.location.href="?url=home"' class="btn btn-primary btn-xl text-uppercase"
                        data-bs-dismiss="modal" type="button" id="buttonEdit">
                    <a style="color: white; text-decoration: none;">Menu création</a>
                </button>

                <button onclick='window.location.href="?url=modifier"'
                        class="btn btn-primary btn-xl text-uppercase mt-2" data-bs-dismiss="modal" type="button"
                        id="buttonEdit">
                    <a style="color: white; text-decoration: none;">Menu modifier</a>
                </button>


            </div>


        </form>
    </div>

</section>

<?php $objSmarty->display("../vendors/tpl/footer.tpl"); ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>