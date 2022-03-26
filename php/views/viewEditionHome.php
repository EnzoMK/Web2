<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>
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
        <a class="navbar-brand" href="#page-top"><img src="../../assets/img/logo/logo.png" alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="viewAccueil.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="viewCompte.php">Compte</a></li>
                <li class="nav-item"><a class="nav-link" href="viewContact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="../index.php">Deconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>
<section class="bg-image mt-5">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Edition</h2>

                            <form>

                                <div class="d-flex justify-content-center">
                                    <button type="reset"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="../html/editionEntreprise.html"
                                                style="text-decoration: none; color: white;">Edition Entreprise</a>
                                    </button>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button type="reset"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="../html/editionOffre.html"
                                                style="text-decoration: none; color: white;">Edition Offre</a></button>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button type="reset"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="../html/editionEtudiant.html"
                                                style="text-decoration: none; color: white;">Edition Etudiant</a>
                                    </button>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button type="reset"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="../html/editionPilote.html"
                                                style="text-decoration: none; color: white;">Edition Pilote</a></button>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button type="reset"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="../html/editionDelegue.html"
                                                style="text-decoration: none; color: white;">Edition Délégué</a>
                                    </button>
                                </div>
                                <br>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $objSmarty->display("../vendors/tpl/footer.tpl"); ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../../js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>