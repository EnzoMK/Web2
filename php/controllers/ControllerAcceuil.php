

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

            if (isset($_POST['go']) AND  $_POST['go']=='envoyer') {
                echo 'sa marche';
                
            }
            require_once('views/viewAcceuil.php');
        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>