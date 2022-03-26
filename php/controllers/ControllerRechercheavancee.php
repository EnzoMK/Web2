

<?php

class ControllerRechercheavancee
{

    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->RechercheAvancee();
    }

    private function RechercheAvancee()
    {
        
        
        if(isset($_SESSION['email'])){

            $this->_user = new UserManager;
            $students = $this->_user->getAllStudent();
            $studentsLocation = $this->_user->getStudentLocation();
            $pilotes = $this->_user->getAllPilote();
            $pilotesLocation = $this->_user->getPiloteLocation();
            $delegues = $this->_user->getAllDelegue();
            $deleguesLocation = $this->_user->getDelegueLocation();

            $this->_company = new CompanyManager;
            $companies = $this->_company->getAllCompany();

            $this->_offer = new OfferManager;
            $offers = $this->_offer->getAllOffer();

        if(isset($_POST['envoyer'])){
            $selected = $_POST['Fruit'];

        if($selected == 'Etudiant' && $_SESSION['role']!=3) { ?>
        <div>
            <?php foreach($students as $student): ?>
                <table><td >
                <?= $student->getFirst_name() ?></td>
                <td><?= $student->getLast_name() ?></td>
                <td><?= $student->getMail() ?></td>
                <td> <?= $student->getUsername() ?></td></table>
            <?php endforeach; ?> </div> <?php 
        } 
        else 
    {
        header("Location: index.php?url=erreur");
    }

        if($selected == 'Pilote' && $_SESSION['role']==1) { ?>
            <?php foreach($pilotes as $pilote): ?>
                <?= $pilote->getFirst_name() ?>
                <?= $pilote->getLast_name() ?>
                <?= $pilote->getMail() ?>
                <?= $pilote->getUsername() ?>
            <?php endforeach; ?><?php 
        } 
        else 
    {
        header("Location: index.php?url=erreur");
    }

        if($selected == 'Delegue' && $_SESSION['role']!=3) { ?>
            <?php foreach($delegues as $delegue): ?>
                <?= $delegue->getFirst_name() ?>
                <?= $delegue->getLast_name() ?>
                <?= $delegue->getMail() ?>
                <?= $delegue->getUsername() ?>
            <?php endforeach; ?><?php 
        } 
        else 
    {
        header("Location: index.php?url=erreur");
    }

        if($selected == 'Entreprise') { ?>
            <?php foreach($companies as $company): ?>
                <?= $company->getId_company() ?>
                <?= $company->getName_company() ?>
                <?= $company->getActivity_area() ?>
                <?= $company->getNumber_of_cesi_interns() ?>
                <?= $company->getConfidence_promotion_Pilot() ?>
            <?php endforeach; ?><?php 
        } 

        if($selected == 'Offre') { ?>
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

        
        require_once('views/viewRechercheAvancee.php');
            


            
        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>