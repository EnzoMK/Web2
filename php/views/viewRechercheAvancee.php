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
<br><br><br><br><br><br>

<!-- recherches et filtres -->
<section class="row align-content-center ">
    <div class="p-3 bg-dark text-white row">

        <div class="row mt-1">
            <form class=" mb-3 mb-lg-0">
                <input type="search" class="form-control form-control-dark form-control form-control-lg" placeholder="Recherches... "></input>
            </form>
        </div>

        <div class="row mt-3">
            <!--Filtre 1-->
            <div class="col">

<!-- Formulaire de filtres et de recherches  -->
                <form action="" method="post">
                
                    <?php 
                        if(isset($_POST['envoyer'])){ ?>

                        <?php 
                            if(isset($_POST['value'])){ ?>
                            <select name="NameEntreprise" class="form-control form-control-lg">
                            <option value="" disabled selected>Nom Entreprise</option>
                            <?php foreach ($companies as $company) {
                                            echo('<option value="' . $company->getName_company() . '">' . $company->getName_company() . "</option>");
                                }
                                ?> </select> 
                                 <select name="SecteurEntreprise" class="form-control form-control-lg">
                            <option value="" disabled selected>Secteur d'activité</option>
                            <?php foreach ($companies as $company) {
                                            echo('<option value="' . $company->getActivity_area() . '">' . $company->getActivity_area() . "</option>");
                                }
                                ?> </select>
                                <select name="VilleEntreprise" class="form-control form-control-lg">
                        <option value="" disabled selected>Ville</option>
                            <?php foreach ($companiesLocation as $company) {
                                            echo('<option value="' . $company->getCity_location() . '">' . $company->getCity_location() . "</option>");
                                }
                                ?> </select>
                                <?php
                                
                            } ?>

                        <?php 
                            if(isset($_POST['offer'])){ ?>
                            <select name="NameEntrepriseOffer" class="form-control form-control-lg">
                            <option value="" disabled selected>Nom Entreprise</option>
                            <?php foreach ($offersCompany as $offers) {
                                            echo('<option value="' . $offers->getName_company() . '">' . $offers->getName_company() . "</option>");
                                }
                                ?> </select>
                        <select name="CompetenceOffer"class="form-control form-control-lg">
                        <option value="" disabled selected>Compétences</option>
                            <?php foreach ($offersSkill as $offerSkill) {
                                            echo('<option value="' . $offerSkill->getName_skill() . '">' . $offerSkill->getName_skill() . "</option>");
                                }
                                ?> </select>

                        <select name="Promotion" class="form-control form-control-lg">
                        <option value="" disabled selected>Promotion</option>
                            <?php foreach ($offersPromotion as $offerPromotion) {
                                            echo('<option value="' . $offerPromotion->getName_promotion() . '">' . $offerPromotion->getName_promotion() . "</option>");
                                }
                                ?> </select>
                                <select name="DateDebut" class="form-control form-control-lg">
                        <option value="" disabled selected>Date de début</option>
                            <?php foreach ($offers as $offer) {
                                            echo('<option value="' . $offer->getStart_intership_date() . '">' . $offer->getStart_intership_date() . "</option>");
                                }
                                ?> </select>
                                <select name="DateFin" class="form-control form-control-lg">
                        <option value="" disabled selected>Date de fin</option>
                            <?php foreach ($offers as $offer) {
                                            echo('<option value="' . $offer->getEnd_intership_date() . '">' . $offer->getEnd_intership_date() . "</option>");
                                }
                                ?> </select>
                                <?php 
                            } ?>
                        
                        
                       <?php }
                        else { ?>
                                <select name="Fruit" class="form-control form-control-lg">
                        <option value="" disabled selected>Choisir un filtre</option>

                        <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("50", $_SESSION['role']) || in_array("2", $_SESSION['role']) ){  ?>
                            
                            <option value="Entreprise">Entreprise</option>

                        <?php } ?>
                        
                        <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("50", $_SESSION['role']) || in_array("8", $_SESSION['role']) ){  ?>

                            <option value="Offer">Offre</option>
                        <?php }?>
                        
                            <?php if(in_array("30", $_SESSION['role']) || in_array("13", $_SESSION['role']) ){  ?>
                                <option value="Pilote">Pilote</option>

                                <?php }?>
                                <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("17", $_SESSION['role']) ){  ?>
                                    <option value="Delegue">Delegue</option>
                                <?php }?>

                                <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("22", $_SESSION['role']) ){  ?>
                                    <option value="Etudiant">Etudiant</option>
                                <?php }?>            
                    </select>

                       <?php } ?>

                                
                 <div class="text-center">
                    <input type="submit" name="envoyer" value="Actualiser" class="buttonfiltre">
                    <input type="submit" name="reinitialiser" value="Réintialiser" class="buttonfiltre">
                    </div>
                </form>
            </div>
            <!--Filtre 2-->
        </div>
</section>


<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Résultats</h2>
            <h3 class="section-subheading text-muted">Merci d'avoir utilisé nos filtres</h3>
        </div>
        <div class="row">
            <?php
            if (isset($_POST['Fruit'])) {

                if ($_POST['Fruit'] == "Entreprise") {

                    foreach ($companys as $company) {
                        $objSmarty->assign('titre', $company->getName_company());
                        $objSmarty->assign('secteuractivite', $company->getActivity_area());
                        $objSmarty->assign('etudiantdejastage', $company->getNumber_of_cesi_interns());
                        $objSmarty->assign('confiancepilot', $company->getConfidence_promotion_pilot());
                        foreach ($places as $place) {
                            if ($company->getId_company() == $place->getId_company()) {
                                foreach ($locations as $location) {
                                    if ($place->getId_location() == $location->getId_location()) {
                                        $objSmarty->assign('lieu', $location->getCity_location());
                                    }
                                }
                            }
                        }

                        $numerotile++;
                        $objSmarty->assign('numerotile', $numerotile);
                        $objSmarty->display("../vendors/tpl/tilecompany.tpl");
                    }


                } elseif ($_POST['Fruit'] == "Offer") {
                    foreach ($offers as $offer) {
                        $objSmarty->assign('idoffre', $offer->getId_offer());
                        $objSmarty->assign('titreoffre', $offer->getName_offer());
                        $objSmarty->assign('description', $offer->getDescription_offer());
                        $objSmarty->assign('remuneration', $offer->getRemuneration());
                        $objSmarty->assign('datedebut', $offer->getStart_intership_date());
                        $objSmarty->assign('datefin', $offer->getEnd_intership_date());
                        $objSmarty->assign('datepublication', $offer->getPublication_date());
                        $objSmarty->assign('duree', $offer->getInternship_duration());

                        /*foreach ($offer_promotions as $offer_promotion){
                            if($offer->getId_offer() == $offer_promotion->getId_offer()){
                                $objSmarty->assign('promotion', $offer_promotion->getName_promotion());

                            }


                        }
                        foreach ($skills as $skill){
                           if($offer->getId_offer() == $skill->getId_offer()){
                               $objSmarty->assign('skill', $skill->getName_skill());

                           }


                       }*/


                foreach ($companys as $company) {
                    if ($company->getId_company() == $offer->getId_company()) {
                        $objSmarty->assign('nomentreprise', $company->getName_company());
                        foreach ($places as $place) {
                            if ($company->getId_company() == $place->getId_company()) {
                                foreach ($locations as $location) {
                                    if ($place->getId_location() == $location->getId_location()) {
                                        $objSmarty->assign('lieu', $location->getCity_location());
                                    }


                                }

                            }
                        }
                    }
                    $numerotile++;
                    $objSmarty->assign('numerotile', $numerotile);

                }


                        $objSmarty->display("../vendors/tpl/tileoffer.tpl");


                    }
                } elseif ($_POST['Fruit'] == "Pilote") {
                    foreach ($users as $user) {
                        foreach ($pilots as $pilot) {
                            if ($user->getId_user() == $pilot->getId_user()) {
                                $objSmarty->assign('titre', $user->getFirst_name() . " " . $user->getLast_name());
                                $numerotile++;
                                $objSmarty->assign('numerotile', $numerotile);
                                $objSmarty->display("../vendors/tpl/tilepilot.tpl");
                            }


                        }


                    }


                } elseif ($_POST['Fruit'] == "Delegue") {
                    foreach ($users as $user) {
                        foreach ($delegates as $delegate) {

                            if ($user->getId_user() == $delegate->getId_user()) {


                                $objSmarty->assign('titre', $user->getFirst_name() . " " . $user->getLast_name());

                                $numerotile++;
                                $objSmarty->assign('numerotile', $numerotile);
                                $objSmarty->display("../vendors/tpl/tiledelegue.tpl");
                            }


                        }


                    }


                } elseif ($_POST['Fruit'] == "Etudiant") {
                    foreach ($users as $user) {

                        foreach ($students as $student) {

                            if ($user->getId_user() == $student->getId_user()) {


                                $objSmarty->assign('titre', $user->getFirst_name() . " " . $user->getLast_name());

                                $numerotile++;
                                $objSmarty->assign('numerotile', $numerotile);
                                $objSmarty->display("../vendors/tpl/tileetudiant.tpl");
                            }


                        }


                    }


                }

            }

            ?>


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