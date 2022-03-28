<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>
<?php $objSmarty->display("../vendors/tpl/head.tpl"); ?>


<body id="page-top">
<!-- Navigation-->
<?php $objSmarty->display("../vendors/tpl/bandeau_haut.tpl"); ?>
<br><br>
<section class="bg-image mt-5">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 ">
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