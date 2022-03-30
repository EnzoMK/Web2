<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>
<?php $objSmarty->display("../vendors/tpl/head.tpl"); ?>


<body id="page-top">
<!-- Navigation-->
<?php $objSmarty->display("../vendors/tpl/bandeau_haut.tpl"); ?>
<br><br><br>
<section class=" bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 ">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Création d'un compte pilote</h2>

                            <form method="post">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Nom</label>
                                    <input type="text" id="form3Example1cg" name="nom"
                                           class="form-control form-control-lg"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Prénom</label>
                                    <input type="text" id="form3Example2cg" name="prenom"
                                           class="form-control form-control-lg"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Centre</label>
                                    <input type="text" id="form3Example3cg" name="centre"
                                           class="form-control form-control-lg"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Ville du Centre</label>
                                    <input type="text" id="form3Example4cg" name="villeducentre"
                                           class="form-control form-control-lg"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Code postal du Centre</label>
                                    <input type="text" id="form3Example5cg" name="codepostal"
                                           class="form-control form-control-lg"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Promotion assignée(s)</label>
                                    <input type="text" id="form3Example6cdg" name="promotionassigné"
                                           class="form-control form-control-lg"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Mail</label>
                                    <input type="email" id="form3Example7cdg" name="mail"
                                           class="form-control form-control-lg"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Mot de passe</label>
                                    <input type="password" id="form3Example8cdg" name="motdepasse"
                                           class="form-control form-control-lg"/>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg"/>
                                    <label class="form-check-label" for="form2Example3g">
                                        Je confirme la création <a href="#!" class="text-body"><u></u></a>
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

<?php $objSmarty->display("../vendors/tpl/footer.tpl"); ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
