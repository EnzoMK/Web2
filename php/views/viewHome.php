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
<br><br><br>
<section class="bg-image mt-5">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 ">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Création</h2>

                            <form>
                            
                            <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("3", $_SESSION['role'])){  ?>

                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationEntreprise" onClick='window.location.href="?url=createcompany"' style="text-decoration: none; color: black;"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                                Création
                                            Entreprise</a></button>
                                </div>
                                <br>
                            
                            <?php } ?>



                            <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("9", $_SESSION['role'])){  ?>

                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationOffre"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onClick='window.location.href="?url=createoffer"' style="text-decoration: none; color: black;">
                                                Création
                                            Offre</button>
                                </div>
                                <br>

                                <?php } ?>

                                <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("23", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationEtudiant"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onClick='window.location.href="?url=createstudent"' style="text-decoration: none; color: black;">
                                                Création
                                            Etudiant</button>
                                </div>
                                <br>

                                <?php } ?>

                                <?php if(in_array("30", $_SESSION['role']) || in_array("14", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationPilote"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onClick='window.location.href="?url=createpilot"' style="text-decoration: none; color: black;">
                                                Création
                                            Pilote</button>
                                </div>
                                <br>
                                <?php } ?>

                                <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("18", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationDelegue"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onClick='window.location.href="?url=createdelegate"' style="text-decoration: none; color: black;">
                                                Création
                                            Délégué</button>
                                </div>
                                <br>
                                <?php } ?>

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

<!-- Implémentation des script JS-->
<script src="../js/scripts.js"></script>
<script src="../js/champs.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>