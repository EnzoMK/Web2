<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SuperStage</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo/logo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="../css/styles.css"/>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="../assets/img/logo/logo.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
        <form method='GET'>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    
                        <li class="nav-item"><a class="nav-link" href="viewAcceuil.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="viewCompte.php">Compte</a></li>
                        <li class="nav-item"><a class="nav-link" href="viewContact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="?url=identification"  >Deconnexion</a></li>
                   
                </ul>
            </div>
        </form>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Trouvez un stage maintenant !</div>
            <div class="masthead-heading text-uppercase">Bienvenue dans l'arène !</div>
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
                        <div class="col-lg-3">
                            <button type="button" class="btn btn-info wrn-btn"><a href="viewRechercheAvance.php" style="text-decoration: none; color: white;">Page recherche avancée</a></button>
                        </div>
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
                            <img class="img-fluid" src="../assets/img/entreprise/airbus.jpg" alt="..." />
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
                            <img class="img-fluid" src="../assets/img/entreprise/orange.jpg" alt="..." />
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
                            <img class="img-fluid" src="../assets/img/entreprise/sopra.png" alt="..." />
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
                            <img class="img-fluid" src="../assets/img/entreprise/ca.jpg" alt="..." />
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
                            <img class="img-fluid" src="../assets/img/entreprise/sncf.jpg" alt="..." />
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
                            <img class="img-fluid" src="../assets/img/entreprise/sfr.jpg" alt="..." />
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
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Stage en développement Logiciel</h2>
                                <p class="item-intro text-muted">Airbus</p>
                                <img class="img-fluid d-block mx-auto" src="../../assets/img/entreprise/airbus.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Lieu:</strong> Orléans
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> erkljgnerq@airbus.fr
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
                                        <i class="fas fa-times me-1"></i>
                                        Fermer
                                    </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
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
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Stage en développement Web</h2>
                                <p class="item-intro text-muted">Orange</p>
                                <img class="img-fluid d-block mx-auto" src="../../assets/img/entreprise/orange.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Lieu:</strong> Tours
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> bapt.ouee@orange.fr
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
                                        <i class="fas fa-times me-1"></i>
                                        Fermer
                                    </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
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
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Stage Assistant Cyber-sécurité</h2>
                                <p class="item-intro text-muted">Sopra Steria</p>
                                <img class="img-fluid d-block mx-auto" src="../../assets/img/entreprise/sopra.png" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Lieu:</strong> Orléans-la-source
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> fk.hich@sopra.fr
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
                                        <i class="fas fa-times me-1"></i>
                                        Fermer
                                    </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
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
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Stage en développement informatique</h2>
                                <p class="item-intro text-muted">Crédit Agricole</p>
                                <img class="img-fluid d-block mx-auto" src="../assets/img/entreprise/ca.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Lieu:</strong> Olivet
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> armde@ca.fr
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
                                        <i class="fas fa-times me-1"></i>
                                        Fermer
                                    </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
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
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Stage Optimisation Base de Données</h2>
                                <p class="item-intro text-muted">SNCF</p>
                                <img class="img-fluid d-block mx-auto" src="../assets/img/entreprise/sncf.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Lieu:</strong> Fleury-les-Aubrais
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> jacki.lflflfl@sncf.fr
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
                                        <i class="fas fa-times me-1"></i>
                                        Fermer
                                    </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
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
                <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Stage en Analyse de données</h2>
                                <p class="item-intro text-muted">SFR</p>
                                <img class="img-fluid d-block mx-auto" src="../../assets/img/entreprise/sfr.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Lieu:</strong> Orléans
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> jack.echel@sfr.fr
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
                                        <i class="fas fa-times me-1"></i>
                                        Fermer
                                    </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttoncreer">
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
                        <img class="mx-auto rounded-circle" src="../assets/img/team/1.jpg" alt="..." />
                        <h4>Guillaume Duboys</h4>
                        <p class="text-muted">L'investisseur</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="../assets/img/team/2.jpg" alt="..." />
                        <h4>Antoine Favereau</h4>
                        <p class="text-muted">Assistant café</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="../assets\img\team\3.jpg" alt="..." />
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
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
                
                <button type='submit' class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button" id="buttonEdit">
                    <a href='?url=createstudent' style="color: white; text-decoration: none;">Créer</a> 
</button>
                
            </div>
            </form>
        </div>

    </section>

    <!--Footer-->
    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>A propos de nous</h2>
                <div class="content">
                    <p>Notre site web vous permet de regrouper différentes offres de stage, et qui permet de stocker les données des entreprises ayant déjà pris un stagiaire, ou qui en recherchent un.</p>
                    <div class="social">
                        <a href="https://fr-fr.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                        <a href="https://twitter.com/"><span class="fab fa-twitter"></span></a>
                        <a href="https://www.instagram.com/"><span class="fab fa-instagram"></span></a>
                        <a href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>
            <div class="center box">
                <h2>Adresse</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span></a>
                        <span class="text">1 allée du titane - Orléans</span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">01 33 55 38 93</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">contact@superstage.com</span>
                    </div>
                </div>
            </div>
            <div class="right box">
                <h2>Contactez nous</h2>
                <div class="content">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea rows="2" cols="25" required></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Envoyer <i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <center>
                <span class="credit">Créé par <a href="#">SuperStage</a> | </span>
                <span class="far fa-copyright"></span><span> 2022 Tout droits réservés</span>
            </center>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>