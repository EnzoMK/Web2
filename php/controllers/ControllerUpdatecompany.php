<!-- Creer une classe qui va permettre de controler la page de modification d'une entreprise -->

<?php

class ControllerUpdatecompany{


    // constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->updatecompany();
    }

    // fonction qui execute toutes les nécéssitées :
private function updatecompany(){

    $this->_updatecompany = new CompanyManager();

if (isset($_SESSION['email'])) {
    if(in_array("4", $_SESSION['role']) || in_array("6", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){

    if (isset($_POST['deconnexion'])) {
        unset($_SESSION['email']);
        header("Location: index.php?url=identification");
    }

    if (isset($_POST['submitUpdate'])) {

        if(in_array("4", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
            if(!empty($_POST['Nlocalite']) &&  !empty($_POST['Vlocalite']) && !empty($_POST['CP']) && !empty($_POST['Nom']) && !empty($_POST['NomModif']) && !empty($_POST['Secteur']) && !empty($_POST['AncienStagiaire']) && !empty($_POST['Confiance'])){
        $this->_updatecompany->ReqUpdateCompany($_POST['Nlocalite'], $_POST['Vlocalite'], $_POST['CP'], $_POST['Nom'],$_POST['NomModif'], $_POST['Secteur'], $_POST['AncienStagiaire'], $_POST['Confiance']);
        header("Location: index.php?url=pagefincm");
    }
    else 
            {
                $_POST['error']=true;
            }
}
        else {
            header("Location: index.php?url=erreur");
        }
        }

    if (isset($_POST['supprimer'])) {
        if(in_array("6", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
            if(!empty($_POST['NomModif'])){
        $this->_updatecompany->ReqSupprimerCompany($_POST['NomModif']);
        header("Location: index.php?url=pagefincm");
    }
    else 
            {
                $_POST['error']=true;
            }
}
    else {
        header("Location: index.php?url=erreur");
    }
}

    require_once('views/viewModifierEntreprise.php');
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

