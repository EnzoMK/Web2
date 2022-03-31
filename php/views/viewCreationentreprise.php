<!-- Appel de smarty pour utiliser les templates -->
<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>

<!-- Appel du template du head  -->
<?php $objSmarty->display("../vendors/tpl/head.tpl"); ?>

<body id="page-top">

<!-- Navigation-->
<?php $objSmarty->display("../vendors/tpl/bandeau_haut.tpl"); ?>
<section class="bg-image mt-5">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 ">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Création d'une Entreprise</h2>

                    <!-- Formulaire de creation -->
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
                                    <input type="number" id="form3Example4cg" class="form-control form-control-lg" min="10000" max ="99999"
                                           name="CP"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Nombre de stagiaire CESI déjà
                                        accepté en stage</label>
                                    <input type="text" id="form3Example5cdg" class="form-control form-control-lg"
                                           name="AncienStagiaire"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example45cdg">Confiance du pilote de
                                        promotion</label>
                                        <select id="form3Example6cdg"  name="Confiance"
                                           class="form-control form-control-lg">
                                        <option value="" disabled selected>Choisir une note</option>
                                        <option value="1/10">1/10</option>
                                        <option value="2/10">2/10</option>
                                        <option value="3/10">3/10</option>
                                        <option value="4/10">4/10</option>
                                        <option value="5/10">5/10</option>
                                        <option value="6/10">6/10</option>
                                        <option value="7/10">7/10</option>
                                        <option value="8/10">8/10</option>
                                        <option value="9/10">9/10</option>
                                        <option value="10/10">10/10</option>
                                    </select>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                           id="form2Example20cg"/>
                                    <label class="form-check-label" for="form2Example3g">
                                        Je confirme la création 
                                    </label>
                                </div>
                                <?php if(isset($_POST['error'])){ ?>
                                    <strong style='postion: absolute; margin-left:33%; color:red;'> Veuillez remplir le formulaire </strong> <br> <br>
                                    <?php } ?>

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

<!-- implémentation du template footer -->
<?php $objSmarty->display("../vendors/tpl/footer.tpl"); ?>

<!-- Implémentation Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Implémentation du script JS-->
<script src="../js/scripts.js"></script>
<script src="../js/champs.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>