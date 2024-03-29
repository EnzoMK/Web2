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
                <div class="col-12 col-md-9 col-lg-7">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Modifier</h2>

                            <form>
                            <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("4", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationEntreprise"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onClick='window.location.href="?url=updatecompany"' style="text-decoration: none; color: black;">
                                                Modifier
                                            Entreprise</a></button>
                                </div>
                                <br>
                                <?php } ?>

                                <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("10", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationOffre"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onClick='window.location.href="?url=updateoffer"' style="text-decoration: none; color: black;">
                                                Modifier
                                            Offre</a></button>
                                </div>
                                <br>
                                <?php } ?>

                                <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("24", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationEtudiant"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onClick='window.location.href="?url=updatestudent"' style="text-decoration: none; color: black;">
                                                Modifier
                                            Etudiant</button>
                                </div>
                                <br>
                                <?php } ?>

                                <?php if(in_array("30", $_SESSION['role']) || in_array("15", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationPilote"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onClick='window.location.href="?url=updatepilot"' style="text-decoration: none; color: black;">
                                                Modifier
                                            Pilote</a></button>
                                </div>
                                <br>
                                <?php } ?>

                                <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("19", $_SESSION['role'])){  ?>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" name="viewCreationDelegue"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onClick='window.location.href="?url=updatedelegate"' style="text-decoration: none; color: black;">
                                                Modifier
                                            Délégué</a></button>
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