<!-- Creer une classe qui va permettre de controler la page d'idendification -->
<?php

class ControllerIdentification
{
    private $_userManager;
    private $_view;

    
// constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->users();
    }

    // fonction qui execute toutes les nécéssitées :
    private function users()
    {
        $this->_userManager = new UserManager;

        if(isset($_SESSION['email']) && isset($_SESSION['role']) ){
           
           header("Location: index.php?url=acceuil");

        }

        else {
        if (isset($_POST['submit']))
        {
            $mail = $this->_userManager->verifUsers($_POST['email'],$_POST['mdp']);
            
            $role = $this->_userManager->takeRole($_POST['email'],$_POST['mdp']);
            $_SESSION['role'] = $role;
            $_SESSION['email'] = $mail;
            

        }
        require_once('views/viewIdentification.php');
    }
        
    }

    
}

?>