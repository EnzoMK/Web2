<!-- Creer une classe qui va permettre de controler la page de modification d'un délégué -->
<?php

class ControllerUpdatedelegate{


    // constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->updatedelegate();
    }

    // fonction qui execute toutes les nécéssitées :
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
        if(!empty($_POST['nomModifier']) && !empty($_POST['prenomModifier']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['ville']) && !empty( $_POST['namecenter']) && !empty($_POST['codepostal']) ){
         $password = hash("sha256",$_POST['password']);
        $this->_updatedelegate->ReqUpdateDelegate($_POST['nomModifier'],$_POST['prenomModifier'],$_POST['nom'], $_POST['prenom'], $_POST['email'], $password, $_POST['ville'], $_POST['namecenter'], $_POST['codepostal']);
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
        if(in_array("20", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
            if(!empty($_POST['nomModifier']) && !empty($_POST['prenomModifier'])){
        $this->_updatedelegate->ReqDeleteDelegate($_POST['nomModifier'],$_POST['prenomModifier']);
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

