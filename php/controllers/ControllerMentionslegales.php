<!-- Creer une classe qui va permettre de controler la page de mentions légales -->
<?php

class ControllerMentionslegales
{

    // constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->mentionslegales();
    }

    // fonction qui execute toutes les nécéssitées :
    private function mentionslegales()
    {
            require_once('views/viewMentionslegales.php');
   
        }

}

?>