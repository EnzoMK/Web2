

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

        if(isset($_POST['envoyer'])){
            $selected = $_POST['Fruit'];
        if($selected == 'Etudiant') { ?>
            <?php foreach($students as $student): ?>
                <?= $student->getFirst_name() ?>
                <?= $student->getLast_name() ?>
                <?= $student->getMail() ?>
                <?= $student->getUsername() ?>
            <?php endforeach; ?><?php 
        } 

        if($selected == 'Pilote') { ?>
            <?php foreach($pilotes as $pilote): ?>
                <?= $pilote->getFirst_name() ?>
                <?= $pilote->getLast_name() ?>
                <?= $pilote->getMail() ?>
                <?= $pilote->getUsername() ?>
            <?php endforeach; ?><?php 
        } 

        if($selected == 'Delegue') { ?>
            <?php foreach($delegues as $delegue): ?>
                <?= $delegue->getFirst_name() ?>
                <?= $delegue->getLast_name() ?>
                <?= $delegue->getMail() ?>
                <?= $delegue->getUsername() ?>
            <?php endforeach; ?><?php 
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

        }

        
        require_once('views/viewRechercheAvancee.php');
            


            
        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>