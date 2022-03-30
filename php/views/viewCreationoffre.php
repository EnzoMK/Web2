<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();

?>
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
                            <h2 class="text-uppercase text-center mb-5">Création d'une Offre</h2>

                            <form method="POST">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Nom de l'offre</label>
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                           name="nom"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Compétences</label>
                                    <select name="skill">
                                        <option value="" disabled selected>Choisir une compétence</option>
                                        <?php foreach ($skills as $skill) {
                                            echo('<option value="' . $skill->getName_skill() . '">' . $skill->getName_skill() . "</option>");
                                        } ?>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Entreprise</label>
                                    <select name="nomcompany">
                                        <option value="" disabled selected>Choisir une entreprise</option>
                                        <?php foreach ($companys as $company) {
                                            echo('<option value="' . $company->getName_company() . '">' . $company->getName_company() . "</option>");
                                        } ?>


                                    </select>
                                </div>


                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Type de promotion
                                        concernées</label>


                                    <select name="promotion">
                                        <option value="" disabled selected>Choisir une promotion</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="A4">A4</option>
                                        <option value="A5">A5</option>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example5cdg">Durée du stage (en
                                        semaines)</label>
                                    <input type="text" id="form3Example5cdg" class="form-control form-control-lg"
                                           name="dureeoffre"/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example6cdg">Base de rémunération</label>
                                    <input type="text" id="form3Example6cdg" class="form-control form-control-lg"
                                           name="basederemuneration"/>
                                </div>


                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example5cdg">Date de début d'offre</label>
                                    <input type="text" id="form3Example8cdg" class="form-control form-control-lg"
                                           name="datedebut"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example5cdg">Date de fin d'offre</label>
                                    <input type="text" id="form3Example9cdg" class="form-control form-control-lg"
                                           name="datefin"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example8cdg">Nombre de places offertes aux
                                        étudiants</label>
                                    <input type="text" id="form3Example10cdg" class="form-control form-control-lg"
                                           name="nombreplace"/>
                                </div>

                                <div class="msg">
                                    <div class="text">Description</div>
                                    <textarea style=" width:100%;" name="descriptionoffre" rows="2" cols="25"
                                              required></textarea>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                           id="form2Example11cg"/>
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