

<?php

class ControllerCreatedelegate
{
    private $_compte;
    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->createdelegate();
    }

    private function createdelegate()
    {

        if(isset($_SESSION['email'])){
            if($_SESSION['role'] != 3 ){

            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }

                $this->_createdelegate = new DelegateManager();

                if (isset($_POST['submitCreate'])) {
        
                    $this->_createdelegate->ReqCreateDelegate($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pseudo'], $_POST['password'], $_POST['ville'], $_POST['namecenter'], $_POST['codepostal']);
                }
            
            require_once('views/viewCreationDelegue.php');
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

?>