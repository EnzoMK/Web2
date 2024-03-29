<!-- Creer une classe qui va permettre de controler la page de recherche avancée -->
<?php

class ControllerRechercheavancee
{
    private $_delegate;
    private $_user;
    private $_offer;
    private $_company;
    private $_place; 
    private $_offer_promotion;
    private $_skill;
    private $_pilot;
    private $_promotion;
    private $_student;


    // constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */
        $this->RechercheAvancee();
    }

    // fonction qui execute toutes les nécéssitées :
    private function RechercheAvancee()
    {
        $numerotile = 1;

        $this->_offer = new OfferManager();
        $offers = $this->_offer->getAllOffer();

        $this->_student = new StudentManager();
        $students = $this->_student->getAllStudent();

        $this->_company = new CompanyManager();
        $companys = $this->_company->getAllCompany();
        $locations = $this->_company->getCompanyLocation();

        $this->_pilot = new PilotManager();
        $pilots = $this->_pilot->getAllPilot();

        $this->_delegate = new DelegateManager();
        $delegates = $this->_delegate->getAllDelegate();

        $this->_user = new UserManager();
        $users = $this->_user->getAllUser();

        $this->_promotion = new PromotionManager();
        $promotions = $this->_promotion->getAllPromotion();

        $this->_offer_promotion = new Offer_promotionManager();
        $offer_promotions = $this->_offer_promotion->getAllOfferPromotion();

        $this->_skill = new SkillManager();
        $skills = $this->_skill->getAllSkill();


        $this->_place = new PlaceManager();
        $places = $this->_place->getAllPlace();

        $this->_skill = new SkillManager();
        $skills = $this->_skill->getAllSkill();

        $this->_addwishlist = new WishlistManager();

        if (isset($_SESSION['email'])) {

            if (isset($_POST['deconnexion'])) {
                unset($_SESSION['role']);
                unset($_SESSION['email']);
                header("Location: index.php?url=identification");
            }

            if (isset($_POST['wishlist'])) {
                $this->_addwishlist->AddWishList($_POST['id_offer'], $_POST['email']);
                echo("ajouté à la wl"); }

            $this->_user = new UserManager;

            $students = $this->_user->getAllStudent();
            $studentsLocation = $this->_user->getStudentLocation();
            $pilotes = $this->_user->getAllPilote();
            $pilotesLocation = $this->_user->getPiloteLocation();
            $delegues = $this->_user->getAllDelegue();
            $deleguesLocation = $this->_user->getDelegueLocation();
            
            $this->_company = new CompanyManager;
            $companies = $this->_company->getAllCompany();
            $companiesLocation = $this->_company->getCompanyLocation();

            $this->_offer = new OfferManager;
            $offers = $this->_offer->getAllOffer();
            $offersCompany = $this->_offer->getAllCompanyOffer();
            $offersSkill = $this->_offer->getAllSkillOffer();
            $offersPromotion = $this->_offer->getAllPromotionOffer();

        

        
        if(isset($_POST['envoyer'])){
           
            if (isset($_POST['Fruit'])){
                
                $selected = $_POST['Fruit'];
                
            

        
            if($selected == 'Etudiant' && in_array("22", $_SESSION['role']) || $selected == 'Etudiant' && in_array("40", $_SESSION['role']) || $selected == 'Etudiant' && in_array("30", $_SESSION['role']) ) { ?>
            <div>
                <?php foreach($students as $student): ?>
                    <table><td >
                    <?= $student->getFirst_name() ?></td>
                    <td><?= $student->getLast_name() ?></td>
                    <td><?= $student->getMail() ?></td>
                    <td> <?= $student->getUsername() ?></td></table>
                <?php endforeach; ?> </div> <?php 
            } 
    
    
    
            if($selected == 'Pilote' && in_array("13", $_SESSION['role']) || $selected == 'Pilote' && in_array("30", $_SESSION['role'])) { ?>
                <?php foreach($pilotes as $pilote): ?>
                    <?= $pilote->getFirst_name() ?>
                    <?= $pilote->getLast_name() ?>
                    <?= $pilote->getMail() ?>
                    <?= $pilote->getUsername() ?>
                <?php endforeach; ?><?php 
            } 
    
            if($selected == 'Delegue' && in_array("17", $_SESSION['role']) || $selected == 'Delegue' && in_array("40", $_SESSION['role']) || $selected == 'Delegue' && in_array("30", $_SESSION['role'])) { ?>
                <?php foreach($delegues as $delegue): ?>
                    <?= $delegue->getFirst_name() ?>
                    <?= $delegue->getLast_name() ?>
                    <?= $delegue->getMail() ?>
                    <?= $delegue->getUsername() ?>
                <?php endforeach; ?><?php 
            } 
            
    
            if($selected == 'Entreprise' && in_array("2", $_SESSION['role']) || $selected == 'Entreprise' &&  in_array("40", $_SESSION['role']) || $selected == 'Entreprise' &&  in_array("50", $_SESSION['role']) ||  $selected == 'Entreprise' &&  in_array("30", $_SESSION['role']) ) { ?>
               
               <?php $_POST['value'] = '1'; ?>
               <?php foreach($companies as $company): ?>
                    <?= $company->getId_company() ?>
                    <?= $company->getName_company() ?>
                    <?= $company->getActivity_area() ?>
                    <?= $company->getNumber_of_cesi_interns() ?>
                    <?= $company->getConfidence_promotion_Pilot() ?>
                <?php endforeach; ?><?php 
            } 
           
            if($selected == 'Offre'  && in_array("8", $_SESSION['role']) || $selected == 'Offre'  && in_array("40", $_SESSION['role']) || $selected == 'Offre'  && in_array("50", $_SESSION['role']) || $selected == 'Offre'  && in_array("30", $_SESSION['role'])) { ?>
                
                <?php $_POST['offer'] = true ;?>
                <?php foreach($offers as $offer): ?>
                    <?= $offer->getId_offer() ?>
                    <?= $offer->getInternship_duration() ?>
                    <?= $offer->getRemuneration() ?>
                    <?= $offer->getNumber_place() ?>
                    <?= $offer->getStart_intership_date() ?>
                    <?= $offer->getEnd_intership_date() ?>
                    <?= $offer->getPublication_date() ?>
                    <?= $offer->getId_company() ?>
                    <?= $offer->getName_offer() ?>
                <?php endforeach; ?><?php 
            } 
            }

            if (isset($_POST['NameEntrepriseOffer'])){
                $_POST['offer'] = true;
                $offersName = $this->_offer->getAllOfferCompany($_POST['NameEntrepriseOffer']); ?>

                <?php foreach($offersName as $offer): ?>
                    <?= $offer->getId_offer() ?>
                    <?= $offer->getInternship_duration() ?>
                    <?= $offer->getRemuneration() ?>
                    <?= $offer->getNumber_place() ?>
                    <?= $offer->getStart_intership_date() ?>
                    <?= $offer->getEnd_intership_date() ?>
                    <?= $offer->getPublication_date() ?>
                    <?= $offer->getId_company() ?>
                    <?= $offer->getName_offer() ?>
                <?php endforeach; ?><?php 
            }

            if (isset($_POST['CompetenceOffer'])){
                $_POST['offer'] = true;
                $offersName = $this->_offer->getAllOfferCompetence($_POST['CompetenceOffer']); ?>

                <?php foreach($offersName as $offer): ?>
                    <?= $offer->getId_offer() ?>
                    <?= $offer->getInternship_duration() ?>
                    <?= $offer->getRemuneration() ?>
                    <?= $offer->getNumber_place() ?>
                    <?= $offer->getStart_intership_date() ?>
                    <?= $offer->getEnd_intership_date() ?>
                    <?= $offer->getPublication_date() ?>
                    <?= $offer->getId_company() ?>
                    <?= $offer->getName_offer() ?>
                <?php endforeach; ?><?php 
            }

            if (isset($_POST['Promotion'])){
                $_POST['offer'] = true;
                $offersName = $this->_offer->getAllOfferPromotion($_POST['Promotion']); ?>

                <?php foreach($offersName as $offer): ?>
                    <?= $offer->getId_offer() ?>
                    <?= $offer->getInternship_duration() ?>
                    <?= $offer->getRemuneration() ?>
                    <?= $offer->getNumber_place() ?>
                    <?= $offer->getStart_intership_date() ?>
                    <?= $offer->getEnd_intership_date() ?>
                    <?= $offer->getPublication_date() ?>
                    <?= $offer->getId_company() ?>
                    <?= $offer->getName_offer() ?>
                <?php endforeach; ?><?php 
            }

            if (isset($_POST['DateDebut'])){
                $_POST['offer'] = true;
                $offersName = $this->_offer->getAllOfferDateDebut($_POST['DateDebut']); ?>

                <?php foreach($offersName as $offer): ?>
                    <?= $offer->getId_offer() ?>
                    <?= $offer->getInternship_duration() ?>
                    <?= $offer->getRemuneration() ?>
                    <?= $offer->getNumber_place() ?>
                    <?= $offer->getStart_intership_date() ?>
                    <?= $offer->getEnd_intership_date() ?>
                    <?= $offer->getPublication_date() ?>
                    <?= $offer->getId_company() ?>
                    <?= $offer->getName_offer() ?>
                <?php endforeach; ?><?php 
            }

            if (isset($_POST['DateFin'])){
                $_POST['offer'] = true;
                $offersName = $this->_offer->getAllOfferDateFin($_POST['DateFin']); ?>

                <?php foreach($offersName as $offer): ?>
                    <?= $offer->getId_offer() ?>
                    <?= $offer->getInternship_duration() ?>
                    <?= $offer->getRemuneration() ?>
                    <?= $offer->getNumber_place() ?>
                    <?= $offer->getStart_intership_date() ?>
                    <?= $offer->getEnd_intership_date() ?>
                    <?= $offer->getPublication_date() ?>
                    <?= $offer->getId_company() ?>
                    <?= $offer->getName_offer() ?>
                <?php endforeach; ?><?php 
            }


            if (isset($_POST['NameEntreprise'])){
                $_POST['value'] = true;
                $companiesName = $this->_company->getAllCompanyName($_POST['NameEntreprise']); ?>

                <?php foreach($companiesName as $company): ?>
                    <?= $company->getId_company() ?>
                    <?= $company->getName_company() ?>
                    <?= $company->getActivity_area() ?>
                    <?= $company->getNumber_of_cesi_interns() ?>
                    <?= $company->getConfidence_promotion_Pilot() ?>
                <?php endforeach; ?><?php 
            }

            if (isset($_POST['SecteurEntreprise'])){

                $_POST['value'] = true;
                $companiesName = $this->_company->getAllCompanySecteur($_POST['SecteurEntreprise']); ?>

                <?php foreach($companiesName as $company): ?>
                    <?= $company->getId_company() ?>
                    <?= $company->getName_company() ?>
                    <?= $company->getActivity_area() ?>
                    <?= $company->getNumber_of_cesi_interns() ?>
                    <?= $company->getConfidence_promotion_Pilot() ?>
                <?php endforeach; ?><?php 
            }

            if (isset($_POST['VilleEntreprise'])){

                $_POST['value'] = true;
                $companiesName = $this->_company->getAllCompanyCity($_POST['VilleEntreprise']); ?>

                <?php foreach($companiesName as $company): ?>
                    <?= $company->getId_company() ?>
                    <?= $company->getName_company() ?>
                    <?= $company->getActivity_area() ?>
                    <?= $company->getNumber_of_cesi_interns() ?>
                    <?= $company->getConfidence_promotion_Pilot() ?>
                <?php endforeach; ?><?php 
            }
            
        }

        
        require_once('views/viewRechercheAvancee.php');
            


            
        }
        else {
            header("Location: index.php?url=identification");
        }
    
    }
}
            
          
    



?>