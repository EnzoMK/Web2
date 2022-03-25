

<?php

class ControllerCompte
{
    private $_compte;
    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->compte();
    }

    private function compte()
    {
        
        
        if(isset($_SESSION['email'])){

    
            $this->_compte = new UserManager;
            $users = $this->_compte->getUsers();


            if (isset($_POST['deconnexion']))
                {
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