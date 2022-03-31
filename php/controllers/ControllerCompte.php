<!-- Creer un classe qui va permettre de controler la page compte -->
<?php

class ControllerCompte
{
    private $_user;
    private $_userLocation;
    private $_view;
    private $_skill;

// constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->compte();
    }

    // fonction qui execute toutes les nécéssitées :
    private function compte()
    {   
        
        if(isset($_SESSION['email'])){

    
            $this->_user = new UserManager;
            $users = $this->_user->getUsers();
            $usersLocation = $this->_user->getUsersLocation();


            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }
            require_once('views/viewCompte.php');
            

        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>