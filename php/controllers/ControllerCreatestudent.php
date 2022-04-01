<!-- Creer une classe qui va permettre de controler la page d'accueil -->
<?php

class ControllerCreatestudent
{
    private $_student;
    private $_createStudent;


    // constructeur de la page
    public function __construct($url)
    {
        /* if (isset($url) && count($url)>1)
             throw new Exception('Page introuvable');
         else */
        $this->createusers();
    }

    // fonction qui execute toutes les nécéssitées :
    private function createusers()
    {

        if(isset($_SESSION['email'])){
            if(in_array("23", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){

            $this->_createStudent = new CreateStudent();
            if (isset($_POST['submitCreate'])) {
            if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['centre']) && !empty($_POST['villeducentre']) && !empty($_POST['codepostal'])  && !empty($_POST['promotion']) && !empty($_POST['mail']) && !empty($_POST['motdepasse']) ){
             
           
        
            $password = hash("sha256",$_POST['motdepasse']);
            $this->_createStudent->ReqCreateStudent($_POST['nom'], $_POST['prenom'], $_POST['mail'], $password, $_POST['villeducentre'], $_POST['centre'], $_POST['codepostal'], $_POST['promotion']);
             header("Location: index.php?url=pagefincm");
            }
            else 
            {
                $_POST['error']=true;
            }
            }
            if (isset($_POST['deconnexion']))
            {
                unset($_SESSION['role']);
                unset($_SESSION['email']);
                header("Location: index.php?url=identification");
            }
        require_once('views/viewCreationetudiant.php');
    }
    else 
    {
        header("Location: index.php?url=erreur");
    }
        }
        else {
            header("Location: index.php?url=identification");
        }

        
    }
}