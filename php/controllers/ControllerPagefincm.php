<!-- Creer une classe qui va permettre de controler la page de fin de création et 
modification amenant vers une page de remerciements/succès -->
<?php

class ControllerPagefincm
{
    // constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->pagefincm();
    }

    // fonction qui execute toutes les nécéssitées :
    private function pagefincm()
    {

        if(isset($_SESSION['email'])){

            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }
            require_once('views/viewPagefincm.php');
            
        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>