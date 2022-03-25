<?php

class ControllerHome
{
    private $_home;
    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->home();
    }

    private function home()
    {

        if(isset($_SESSION['email'])){

            if (isset($_POST['deconnexion']))
                {
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