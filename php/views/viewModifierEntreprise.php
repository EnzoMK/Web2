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
<?php $objSmarty->display("../vendors/tpl/bandeau_haut.tpl"); ?>
<section class="bg-image mt-5">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Modifier une Entreprise</h2>

                            <form method="POST">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Nom de l'Entreprise à Modifier</label>
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                           name="NomModif"/>
                                </div>

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
                                    <label class="form-label" for="form3Example4cdg">Confiance du pilote de
                                        promotion</label>
                                    <input type="text" id="form3Example6cdg" class="form-control form-control-lg"
                                           name="Confiance"/>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                           id="form2Example20cg"/>
                                    <label class="form-check-label" for="form2Example3g">
                                        Je confirme la création <a href="rechercheAvancé.html" class="text-body"><u></u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" value="submitUpdate" name="submitUpdate"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                        Modifier
                                    </button>
                                
                                <div class="d-flex justify-content-center">
                                    <button type="submit" value="submitUpdate" name="supprimer"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                        Supprimer
                                    </button>
</div>
                                

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