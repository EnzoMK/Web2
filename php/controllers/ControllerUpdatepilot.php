<?php

class ControllerUpdatepilot{

    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->updatepilote();
    }

private function updatepilote(){

    $this->_updatepilote = new CreatePilot();

    
if (isset($_SESSION['email'])) {
    if(in_array("15", $_SESSION['role']) || in_array("16", $_SESSION['role']) || in_array("30", $_SESSION['role']) ){
    if (isset($_POST['deconnexion'])) {
        unset($_SESSION['email']);
        header("Location: index.php?url=identification");
    }
    if (isset($_POST['submitUpdate'])) {
        if(in_array("15", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
        $this->_updatepilote->ReqUpdatePilote($_POST['nomModifier'],$_POST['prenomModifier'],$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['username'], $_POST['motdepasse'], $_POST['villeducentre'], $_POST['centre'], $_POST['codepostal'], $_POST['promotion']);
        header("Location: index.php?url=pagefincm");
    }
        else {
            header("Location: index.php?url=erreur");
        }
    }

    if (isset($_POST['supprimer'])) {
        if(in_array("16", $_SESSION['role']) || in_array("30", $_SESSION['role'])){

            $this->_updatepilote->ReqDeletePilote($_POST['nomModifier'],$_POST['prenomModifier']);
            header("Location: index.php?url=pagefincm");
        }
    else {
        header("Location: index.php?url=erreur");
    }
}
    require_once('views/viewModifierPilote.php');
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

