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
                            <h2 class="text-uppercase text-center mb-5">Modification d'un compte délégué</h2>

                            <form  method="POST">

                            <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Nom à Modifier</label>
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                           name="nomModifier"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Prénom à Modifier</label>

                                    <input type="text" id="form3Example2cg" class="form-control form-control-lg"
                                           name="prenomModifier"/>
                                </div>


                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Nom</label>
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                           name="nom"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Prénom</label>

                                    <input type="text" id="form3Example2cg" class="form-control form-control-lg"
                                           name="prenom"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Nom du centre</label>
                                    <input type="text" id="form3Example3cg" class="form-control form-control-lg"
                                           name="namecenter"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Ville</label>
                                    <input type="text" id="form3Example3cg" class="form-control form-control-lg"
                                           name="ville"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Code Postal</label>
                                    <input type="text" id="form3Example3cg" class="form-control form-control-lg"
                                           name="codepostal"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Email</label>
                                    <input placeholder="exemple.test@viacesi.fr" type="email" id="form3Example4cdg" class="form-control form-control-lg"
                                           name="email"/>
                                </div>
                       

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Mot de passe</label>
                                    <input type="password" id="form3Example6cdg" class="form-control form-control-lg"
                                           name="password"/>

                                </div>
                                
                                <!-- Default switch -->
                                
                                

                                <br><br>
                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg"/>
                                    <label class="form-check-label" for="form2Example3g">
                                        Je confirme la modification <a href="#!" class="text-body"><u></u></a>
                                    </label>
                                </div>

                                

                                <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("19", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center mb-4">
                                    <button type="submit" name="submitCreate"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                        Modifier
                                    </button>
                                </div>
                                <?php } ?>


                                <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("20", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center mb-4">
                                    <button type="submit" value="submitUpdate" name="supprimer"
                                            class="btn btn-danger btn-block btn-lg gradient-custom-4 text-body">
                                        Supprimer
                                    </button>
                                </div>
                                <?php } ?>

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