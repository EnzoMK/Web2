<?php

class ControllerUpdatecompany{


    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->updatecompany();
    }

private function updatecompany(){

    $this->_updatecompany = new CompanyManager();

    



if (isset($_SESSION['email'])) {

    if (isset($_POST['deconnexion'])) {
        unset($_SESSION['email']);
        header("Location: index.php?url=identification");
    }
    if (isset($_POST['submitUpdate'])) {

        $this->_updatecompany->ReqUpdateCompany($_POST['Nlocalite'], $_POST['Vlocalite'], $_POST['CP'], $_POST['Nom'],$_POST['NomModif'], $_POST['Secteur'], $_POST['AncienStagiaire'], $_POST['Confiance']);
        }

    if (isset($_POST['supprimer'])) {

        $this->_updatecompany->ReqSupprimerCompany($_POST['NomModif']);
    }
    require_once('views/viewModifierEntreprise.php');


} else {
    header("Location: index.php?url=identification");
}
}
}

