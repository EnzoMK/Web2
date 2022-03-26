

<?php

class ControllerCreatecompany
{
    private $_compte;
    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->createcompany();
    }

    private function createcompany()
    {
        $this->_createcompany = new Createcompany();

        if (isset($_POST['submitCreate'])) {

            $this->_createcompany->ReqCreateCompany($_POST['Nlocalite'], $_POST['Vlocalite'], $_POST['CP'], $_POST['Nom'], $_POST['Secteur'], $_POST['AncienStagiaire'], $_POST['Confiance']);
        }

      



        if (isset($_SESSION['email'])) {

            if (isset($_POST['deconnexion'])) {
                unset($_SESSION['email']);
                header("Location: index.php?url=identification");
            }
            require_once('views/viewCreationentreprise.php');


        } else {
            header("Location: index.php?url=identification");
        }
    }
}

?>