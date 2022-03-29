<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>
<?php $objSmarty->display("../vendors/tpl/head.tpl"); ?>


<body id="page-top">
<!-- Navigation-->
<?php $objSmarty->display("../vendors/tpl/bandeau_haut.tpl"); ?>
<!-- recherches et filtres -->

<section class="row align-content-center ">
    <div class="p-3 bg-dark text-white row">

        <div class="row mt-1">
            <form class=" mb-3 mb-lg-0">
                <input type="search" class="form-control form-control-dark " placeholder="Recherches... "></input>
            </form>
        </div>

        <div class="row mt-3">
            <!--Filtre 1-->
            <div class="col">


                <form action="" method="post">
                
                    <?php 
                        if(isset($_POST['envoyer'])){ ?>

                        

                        <?php 
                            if(isset($_POST['value'])){ ?>
                            <select name="NameEntreprise">
                            <option value="" disabled selected>Nom Entreprise</option>
                            <?php foreach ($companies as $company) {
                                            echo('<option value="' . $company->getName_company() . '">' . $company->getName_company() . "</option>");
                                }
                                ?> </select> 
                                 <select name="SecteurEntreprise">
                            <option value="" disabled selected>Secteur d'activité</option>
                            <?php foreach ($companies as $company) {
                                            echo('<option value="' . $company->getActivity_area() . '">' . $company->getActivity_area() . "</option>");
                                }
                                ?> </select>
                                <select name="VilleEntreprise">
                        <option value="" disabled selected>Ville</option>
                            <?php foreach ($companiesLocation as $company) {
                                            echo('<option value="' . $company->getCity_location() . '">' . $company->getCity_location() . "</option>");
                                }
                                ?> </select>
                                <?php
                                
                            } ?>

                        <?php 
                            if(isset($_POST['offer'])){ ?>
                            <select name="NameEntrepriseOffer">
                            <option value="" disabled selected>Nom Entreprise</option>
                            <?php foreach ($offersCompany as $offers) {
                                            echo('<option value="' . $offers->getName_company() . '">' . $offers->getName_company() . "</option>");
                                }
                                ?> </select>
                        <select name="CompetenceOffer">
                        <option value="" disabled selected>Compétences</option>
                            <?php foreach ($offersSkill as $offerSkill) {
                                            echo('<option value="' . $offerSkill->getName_skill() . '">' . $offerSkill->getName_skill() . "</option>");
                                }
                                ?> </select>

                        <select name="Promotion">
                        <option value="" disabled selected>Promotion</option>
                            <?php foreach ($offersPromotion as $offerPromotion) {
                                            echo('<option value="' . $offerPromotion->getName_promotion() . '">' . $offerPromotion->getName_promotion() . "</option>");
                                }
                                ?> </select>
                                <select name="DateDebut">
                        <option value="" disabled selected>Date de début</option>
                            <?php foreach ($offers as $offer) {
                                            echo('<option value="' . $offer->getStart_intership_date() . '">' . $offer->getStart_intership_date() . "</option>");
                                }
                                ?> </select>
                                <select name="DateFin">
                        <option value="" disabled selected>Date de fin</option>
                            <?php foreach ($offers as $offer) {
                                            echo('<option value="' . $offer->getEnd_intership_date() . '">' . $offer->getEnd_intership_date() . "</option>");
                                }
                                ?> </select>
                                <?php 
                            } ?>
                        
                        
                       <?php }
                        else { ?>
                                <select name="Fruit">
                        <option value="" disabled selected>Choisir un filtre</option>

                        <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("50", $_SESSION['role']) || in_array("2", $_SESSION['role']) ){  ?>
                            
                            <option value="Entreprise">Entreprise</option>

                        <?php } ?>
                        
                        <?php if(in_array("30", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("50", $_SESSION['role']) || in_array("8", $_SESSION['role']) ){  ?>
                        
                            <option value="Offre">Offre</option>
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

                                
                 
                    <input type="submit" name="envoyer" value="Actualiser">
                    <input type="submit" name="reinitialiser" value="Reintialiser">
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
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage en Développement Logiciel</div>
                        <div class="portfolio-caption-subheading text-muted">Airbus</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage en développement Web</div>
                        <div class="portfolio-caption-subheading text-muted">Orange</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage Assistant Cyber-sécurité</div>
                        <div class="portfolio-caption-subheading text-muted">Sopra Steria</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage en développement informatique</div>
                        <div class="portfolio-caption-subheading text-muted">Crédit Agricole</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage Optimisation Base de Données</div>
                        <div class="portfolio-caption-subheading text-muted">SNCF</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                       
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Stage en Analyse de données</div>
                        <div class="portfolio-caption-subheading text-muted">SFR</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<footer>
    <div class="main-content">
        <div class="left box">
            <h2>A propos de nous</h2>
            <div class="content">
                <p>Notre site web vous permet de regrouper différentes offres de stage, et qui permet de stocker les données des entreprises ayant déjà pris un stagiaire, ou qui en recherchent un.</p>
                <div class="social">
                    <a href="https://fr-fr.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                    <a href="https://twitter.com/"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.instagram.com/"><span class="fab fa-instagram"></span></a>
                    <a href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a>
                </div>
            </div>
        </div>
        <div class="center box">
            <h2>Adresse</h2>
            <div class="content">
                <div class="place">
                    <span class="fas fa-map-marker-alt"></span></a>
                    <span class="text">1 allée du titane - Orléans</span>
                </div>
                <div class="phone">
                    <span class="fas fa-phone-alt"></span>
                    <span class="text">01 33 55 38 93</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">contact@superstage.com</span>
                </div>
            </div>
        </div>
        <div class="right box">
            <h2>Contactez nous</h2>
            <div class="content">
                <form action="#">
                    <div class="email">
                        <div class="text">Email *</div>
                        <input type="email" required>
                    </div>
                    <div class="msg">
                        <div class="text">Message *</div>
                        <textarea rows="2" cols="25" required></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit">Envoyer <i class="fa-solid fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom text-center">

        <span class="credit">Créé par <a href="#">SuperStage</a> | </span>
        <span class="far fa-copyright"></span><span> 2022 Tout droits réservés</span>

    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

