<?php session_start(); ?>

<?php

class ControllerIdentification
{
    private $_userManager;
    private $_view;

    	



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->users();
    }

    private function users()
    {
        $this->_userManager = new UserManager;

        if(isset($_SESSION['email'])){
            require_once('views/viewAcceuil.php');
        }

        else {
        if (isset($_POST['submit']))
        {
            $users = $this->_userManager->verifUsers($_POST['email'],$_POST['mdp']);
            $_SESSION['email'] = $users;
            echo $_SESSION['email'];
            

        }
        require_once('views/viewIdentification.php');
    }
        
    }
}

?>