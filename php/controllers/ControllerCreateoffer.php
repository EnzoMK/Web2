

<?php

class ControllerCreateoffer
{
    private $_compte;
    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->createoffer();
    }

    private function createoffer()
    {

        if(isset($_SESSION['email'])){
            if(in_array("9", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }
            require_once('views/viewCreationoffre.php');
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