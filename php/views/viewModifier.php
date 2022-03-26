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
<br><br>
<section class="bg-image mt-5">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Modifier</h2>

                            <form>

                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationEntreprise"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="?url=createcompany" style="text-decoration: none; color: black;">Modifier
                                            Entreprise</a></button>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationOffre"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="?url=createoffer" style="text-decoration: none; color: black;">Modifier
                                            Offre</a></button>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationEtudiant"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="?url=createstudent" style="text-decoration: none; color: black;">Modifier
                                            Etudiant</a></button>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationPilote"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="?url=createpilot" style="text-decoration: none; color: black;">Modifier
                                            Pilote</a></button>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationDelegue"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a
                                                href="?url=createdelegate" style="text-decoration: none; color: black;">Modifier
                                            Délégué</a></button>
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
<script src="../js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>