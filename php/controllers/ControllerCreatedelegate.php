

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

            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }
            require_once('views/viewCreationDelegue.php');
            

        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>