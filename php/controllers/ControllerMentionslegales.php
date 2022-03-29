

<?php

class ControllerMentionslegales
{
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->mentionslegales();
    }

    private function mentionslegales()
    {

        if(isset($_SESSION['email'])){
            
            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);

                    header("Location: index.php?url=identification");
                }
            require_once('views/viewMentionslegales.php');


        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>