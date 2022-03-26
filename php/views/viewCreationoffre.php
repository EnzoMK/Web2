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
    <link rel="icon" type="image/x-icon" href="../assets\img\logo\logo.png"/>
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
                            <h2 class="text-uppercase text-center mb-5">Création d'une Offre</h2>

                            <form method="POST">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Nom de l'offre</label>
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                           name="Offre"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Compétences</label>
                                    <input type="text" id="form3Example2cg" class="form-control form-control-lg"
                                           name="Competence"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Entreprise</label>
                                    <input type="text" id="form3Example3cg" class="form-control form-control-lg"
                                           name="Entreprise"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Type de promotion
                                        concernées</label>
                                    <input type="text" id="form3Example4cdg" class="form-control form-control-lg"
                                           name="Promotion"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example5cdg">Durée du stage</label>
                                    <input type="text" id="form3Example5cdg" class="form-control form-control-lg"
                                           name="DureeStage"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example6cdg">Base de rémunération</label>
                                    <input type="text" id="form3Example6cdg" class="form-control form-control-lg"
                                           name="Remuneration"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example7cdg">Date publication de l'offre</label>
                                    <input type="text" id="form3Example7cdg" class="form-control form-control-lg"
                                           name="publication"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example5cdg">Date de début d'offre</label>
                                    <input type="text" id="form3Example8cdg" class="form-control form-control-lg"
                                           name="debutoffre"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example5cdg">Date de fin d'offre</label>
                                    <input type="text" id="form3Example9cdg" class="form-control form-control-lg"
                                           name="finoffre"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example8cdg">Nombre de places offertes aux
                                        étudiants</label>
                                    <input type="text" id="form3Example10cdg" class="form-control form-control-lg"
                                           name="places"/>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                           id="form2Example11cg"/>
                                    <label class="form-check-label" for="form2Example3g">
                                        Je confirme la création <a href="#!" class="text-body"><u></u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" value="submitCreate" name="submitCreate"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                        Création
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