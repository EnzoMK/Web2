<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>SuperStage</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo/logo.png"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet"/>
</head>

<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="../assets/img/logo/logo.png" alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="?url=acceuil">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="?url=compte">Compte</a></li>
                    <li class="nav-item"><a class="nav-link" href="?url=contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php">Deconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-image mt-5">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Création d'une Entreprise</h2>

                                <form method="POST">

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg">Nom Entreprise</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                               name="Nom"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Secteur d'activité</label>

                                        <input type="text" id="form3Example2cg" class="form-control form-control-lg"
                                               name="Secteur"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Nom de la Localité(s)</label>
                                        <input type="text" id="form3Example3cg" class="form-control form-control-lg"
                                               name="Nlocalite"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Ville de la Localité</label>
                                        <input type="text" id="form3Example33cg" class="form-control form-control-lg"
                                               name="Vlocalite"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Code Postal</label>
                                        <input type="text" id="form3Example4cg" class="form-control form-control-lg"
                                               name="CP"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Nombre de stagiaire CESI déjà
                                            accepté en stage</label>
                                        <input type="text" id="form3Example5cdg" class="form-control form-control-lg"
                                               name="AncienStagiaire"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Confiance du pilote de promotion</label>
                                        <input type="text" id="form3Example6cdg" class="form-control form-control-lg" name="Confiance" />
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example20cg" />
                                        <label class="form-check-label" for="form2Example3g">
                         Je confirme la création <a href="rechercheAvancé.html" class="text-body"><u></u></a>
                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" value="submitCreate" name="submitCreate" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Création</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
                        <span class="fas fa-map-marker-alt"></span>
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