<!-- Creer une classe qui va permettre de controler la page de contact -->
<?php

class ControllerContact
{
    private $_contact;
    private $_view;


// constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->contact();
    }

    // fonction qui execute toutes les nécéssitées :
    private function contact()
    {

        if(isset($_SESSION['email'])){

            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }
            require_once('views/viewContact.php');
            

        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>