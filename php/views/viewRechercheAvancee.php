<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SuperStage</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets\img\logo\logo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="../assets\img\logo\logo.png" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="?url=acceuil">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="?url=compte">Compte</a></li>
                    <li class="nav-item"><a class="nav-link" href="?url=contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="authentification.php">Déconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- recherches et filtres -->

    <section id="barrerecherche-filtres" class="row align-content-center ">
        <div class="p-3 bg-dark text-white row">

            <div class="row mt-1">
                <form class=" mb-3 mb-lg-0">
                    <input type="search" class="form-control form-control-dark " placeholder="Recherches... "></input>
                </form>
            </div>
            
            <div class="row mt-3">
                <!--Filtre 1-->
            <div class="col">


        <form action="" method="post">
         <select name="Fruit">
                <option value="" disabled selected>Choose option</option>
                <option value="Etudiant">Etudiant</option>
                <option value="Pilote">Pilote</option>
                <option value="Delegue">Delegue</option>
                <option value="Entreprise">Entreprise</option>
        </select>
    <input type="submit" name="envoyer" vlaue="Choose options">
    </form>

    
            </div>
                <!--Filtre 2-->
                

        </div>
    </section>


    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Résultats</h2>
                <h3 class="section-subheading text-muted">Merci d'avoir utilisé nos filtres</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../assets\img\entreprise\airbus.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Stage en Développement Logiciel</div>
                            <div class="portfolio-caption-subheading text-muted">Airbus</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../assets\img\entreprise\orange.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Stage en développement Web</div>
                            <div class="portfolio-caption-subheading text-muted">Orange</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../assets\img\entreprise\sopra.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Stage Assistant Cyber-sécurité</div>
                            <div class="portfolio-caption-subheading text-muted">Sopra Steria</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../assets\img\entreprise\ca.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Stage en développement informatique</div>
                            <div class="portfolio-caption-subheading text-muted">Crédit Agricole</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../assets\img\entreprise\sncf.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Stage Optimisation Base de Données</div>
                            <div class="portfolio-caption-subheading text-muted">SNCF</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../assets\img\entreprise\sfr.jpg" alt="..." />
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
        <div class="bottom text-center">

            <span class="credit">Créé par <a href="#">SuperStage</a> | </span>
            <span class="far fa-copyright"></span><span> 2022 Tout droits réservés</span>

        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

