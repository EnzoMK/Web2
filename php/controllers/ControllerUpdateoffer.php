<?php

class ControllerUpdateoffer{


    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->updateoffer();
    }

private function updateoffer(){
    $this->_updateoffer = new OfferManager();

if (isset($_SESSION['email'])) {
    if(in_array("4", $_SESSION['role']) || in_array("6", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){

    if (isset($_POST['deconnexion'])) {
        unset($_SESSION['email']);
        header("Location: index.php?url=identification");
    }

    if (isset($_POST['submitUpdate'])) {

        if(in_array("4", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
        $this->_updateoffer->ReqUpdateOffer($_POST['Nlocalite'], $_POST['Vlocalite'], $_POST['CP'], $_POST['Nom'],$_POST['NomModif'], $_POST['Secteur'], $_POST['AncienStagiaire'], $_POST['Confiance']);
        header("Location: index.php?url=pagefincm");
    }
        else {
            header("Location: index.php?url=erreur");
        }
        }

    if (isset($_POST['supprimer'])) {
        if(in_array("6", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){

        $this->_updateoffer->ReqDeleteOffer($_POST['NomModif']);
        header("Location: index.php?url=pagefincm");
    }
    else {
        header("Location: index.php?url=erreur");
    }
}

    require_once('views/viewModifieroffre.php');
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

