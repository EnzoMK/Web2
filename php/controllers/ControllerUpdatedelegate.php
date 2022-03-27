<?php

class ControllerUpdatedelegate{


    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->updatedelegate();
    }

private function updatedelegate(){

    $this->_updatedelegate = new DelegateManager();

if (isset($_SESSION['email'])) {
    if(in_array("19", $_SESSION['role']) || in_array("20", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){

    if (isset($_POST['deconnexion'])) {
        unset($_SESSION['email']);
        header("Location: index.php?url=identification");
    }

    if (isset($_POST['submitUpdate'])) {

        if(in_array("19", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
        $this->_updatecompany->ReqUpdateDelegate($_POST['nomModifier'],$_POST['prenomModifier'],$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['username'], $_POST['motdepasse'], $_POST['villeducentre'], $_POST['centre'], $_POST['codepostal']);
        }
        else {
            header("Location: index.php?url=erreur");
        }
        }

    if (isset($_POST['supprimer'])) {
        if(in_array("20", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){

        $this->_updatecompany->ReqSupprimerCompany($_POST['NomModif']);
    }
    else {
        header("Location: index.php?url=erreur");
    }
}

    require_once('views/viewModifierDelegue.php');
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

