

<?php

class ControllerRechercheavancee
{

    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->RechercheAvancee();
    }

    private function RechercheAvancee()
    {
        
        
        if(isset($_SESSION['email'])){

            require_once('views/viewRechercheAvancee.php');
            
        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>