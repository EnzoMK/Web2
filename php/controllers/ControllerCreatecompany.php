

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

      


        if (isset($_SESSION['email'])) {
            if(in_array("3", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
                $this->_createcompany = new Createcompany();

            if (isset($_POST['submitCreate'])) {
                if(!empty($_POST['Nlocalite']) && !empty($_POST['Vlocalite']) && !empty($_POST['CP']) && !empty($_POST['Nom']) && !empty($_POST['Secteur']) && !empty($_POST['AncienStagiaire']) && !empty($_POST['Confiance']) ) {

            $this->_createcompany->ReqCreateCompany($_POST['Nlocalite'], $_POST['Vlocalite'], $_POST['CP'], $_POST['Nom'], $_POST['Secteur'], $_POST['AncienStagiaire'], $_POST['Confiance']);
            header("Location: index.php?url=pagefincm");
        }
        else 
    {
        $_POST['error']=true;
    }
    }
            
            if (isset($_POST['deconnexion'])) {
                unset($_SESSION['role']);
                unset($_SESSION['email']);
                header("Location: index.php?url=identification");
            }
            require_once('views/viewCreationentreprise.php');
        }
        else 
        {
            header("Location: index.php?url=erreur");
        }
        } else {
            header("Location: index.php?url=identification");
        }
    }
}

?>