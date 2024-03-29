<!-- Creer une classe qui va permettre de controler la page création pilote-->
<?php

class ControllerCreatepilot
{
    private $_ceratePilot;

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

            if(in_array("14", $_SESSION['role']) || in_array("30", $_SESSION['role'])) {

            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }
            
            $this->_createPilot = new CreatePilot();
            if (isset($_POST['submitCreate'])) {
                if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['motdepasse']) && !empty($_POST['villeducentre']) && !empty($_POST['centre']) && !empty($_POST['codepostal'])){
                    
                    $password = hash("sha256",$_POST['motdepasse']);
                    $this->_createPilot->ReqCreatePilot($_POST['nom'], $_POST['prenom'], $_POST['mail'], $password, $_POST['villeducentre'], $_POST['centre'], $_POST['codepostal']);
                    header("Location: index.php?url=pagefincm");
            }
            else 
            {
                $_POST['error']=true;
            }
        }
        

            require_once('views/viewCreationpilote.php');
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