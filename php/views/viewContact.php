<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperStage</title>
    <link rel="icon" href="../assets/img/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="../assets/img/logo/logo.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="?url=acceuil">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="?url=compte">Compte</a></li>
                    <li class="nav-item"><a class="nav-link" href="?url=contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="viewIdentification.php">Deconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <br> <br> <br><br><br>
                <h2 class="section-heading text-uppercase">Contactez-nous</h2>
                <h3 class="section-subheading text-muted">Vous pouvez nous contacter en remplissant le formulaire ci dessous :</h3>
            </div>

            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Nom *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="N° Téléphone *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Votre Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                    </div>
                </div>
                s
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>

                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Envoyer le message</button></div>
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
        <div class="bottom text-center">

            <span class="credit">Créé par <a href="#" style="text-decoration: none; color:blue;">SuperStage</a> | </span>
            <span class="far fa-copyright"></span><span> 2022 Tout droits réservés</span>

        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>