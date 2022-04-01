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

<!-- bannière + Titres -->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Trouvez un stage maintenant !</div>
        <div class="masthead-heading text-uppercase">Bienvenue dans l'arène !</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Let's go</a>
    </div>
</header>

<!-- Recherches -->
<div class="p-3 bg-dark text-white row">
    <nav class="navbar">
        <div class="container bg-dark text-white row p-2 ">
            <form action="viewRechercheAvance.php" method="get" novalidate="novalidate">
                <div class="row">
                    <!-- Liste des filtres -->
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <select class="search-slt" id="filtreacceuil">
                            <option>Rechercher</option>
                            <option>Un étudiant</option>
                            <option>Un pilote</option>
                            <option>Une offre de stage</option>
                            <option>Une entreprise</option>
                            <option>Une délégué</option>
                        </select>
                    </div>

                    <!-- Bouton lancer la recherche -->
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <button type="button" class="btn btn-info wrn-btn"> GO !</button>
                    </div>

                    <!-- Aller vers la page de recherche avancée --> 
                        <div class="col-lg-4 col-sm-6 mb-4x">
                            <button style="text-decoration: none; color: white;" type="button" name="buttonRechercheAvancee" class="btn btn-info wrn-btn" onClick='window.location.href="?url=rechercheavancee"'>Page recherche avancée</button>
                        </div>        
                </div>
            </form>
        </div>
    </nav>
</div>

<!--Offres-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Meilleurs Offres</h2>
            <h3 class="section-subheading text-muted">Vous pouvez retrouver nos offres les plus intéressantes</h3>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($offers as $offer) {
                $objSmarty->assign('titreoffre', $offer->getName_offer());
                $objSmarty->assign('description', $offer->getDescription_offer());
                $objSmarty->assign('remuneration', $offer->getRemuneration());
                $objSmarty->assign('datedebut', $offer->getStart_intership_date());
                $objSmarty->assign('datefin', $offer->getEnd_intership_date());
                $objSmarty->assign('datepublication', $offer->getPublication_date());
                $objSmarty->assign('duree', $offer->getInternship_duration());
                if ($i == 5) {
                    break;
                }
                $i++;
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


            } ?>


        </div>


    </div>
</section>


<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Voici notre équipe</h2>
            <h3 class="section-subheading text-muted">Ils sont à votre disposition pour tout renseignement</h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="../assets/img/team/1.webp" alt="..."/>
                    <h4>Guillaume Duboys de Lavigerie</h4>
                    <p class="text-muted">L'investisseur</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="../assets/img/team/2.webp" alt="..."/>
                    <h4>Baptiste Raulin</h4>
                    <p class="text-muted">Chef de projet</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="../assets/img/team/3.webp" alt="..."/>
                    <h4>Enzo Miragliotta</h4>
                    <p class="text-muted">Développeur Frontend</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <form method='GET'>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">On oublie pas Alex Duguy mais on avait plus trop de place, veuillez nous excuser pour la gène occasionnée. </p>
                        
                        <?php if(in_array("50", $_SESSION['role'])){  ?>
                    
                    <?php }
                    else {   ?>
                        </div>
        
                        <button onclick='window.location.href="?url=home"' class="btn btn-primary btn-xl text-uppercase"
                                data-bs-dismiss="modal" type="button" id="buttonCreate" >
                            Menu création
                        </button>
        
                        <button onclick='window.location.href="?url=modifier"'
                                class="btn btn-primary btn-xl text-uppercase mt-2" data-bs-dismiss="modal" type="button"
                                id="buttonEdit" >
                            Menu modification
                        </button>
                <?php } ?>
        </form>
    </div>

</section>

<!-- implémentation du template footer -->
<?php $objSmarty->display("../vendors/tpl/footer.tpl"); ?>

<!-- Implémentation Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Implémentation du script JS-->
<script src="../js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>