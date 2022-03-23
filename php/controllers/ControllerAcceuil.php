

<?php

class ControllerAcceuil
{
    private $_acceuil;
    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->acceuil();
    }

    private function acceuil()
    {

        if(isset($_SESSION['email'])){
            require_once('views/viewAcceuil.php');
            if (isset($_POST['deconnexion']))
        {
            unset($_SESSION['email']);
            header("Location: index.php?url=identification");
        }

        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>