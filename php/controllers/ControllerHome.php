<!-- Creer une classe qui va permettre de controler le home de la page -->
<?php

class ControllerHome
{
    private $_home;
    private $_view;


// constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->home();
    }

    // fonction qui execute toutes les nécéssitées :
    private function home()
    {
        if(isset($_SESSION['email'])){

            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }
            require_once('views/viewHome.php');      
        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>