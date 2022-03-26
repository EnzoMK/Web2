<?php

class ControllerUpdatestudent{


    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->updatestudent();
    }

private function updatestudent(){

    $this->_updatestudent = new Createstudent();

    



if (isset($_SESSION['email'])) {
    if($_SESSION['role'] != 3 ){
    if (isset($_POST['deconnexion'])) {
        unset($_SESSION['email']);
        header("Location: index.php?url=identification");
    }
    if (isset($_POST['submitUpdate'])) {

        $this->_updatestudent->ReqUpdateStudent($_POST['nomModifier'],$_POST['prenomModifier'],$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['username'], $_POST['motdepasse'], $_POST['villeducentre'], $_POST['centre'], $_POST['codepostal'], $_POST['promotion']);
        }

    if (isset($_POST['supprimer'])) {

        $this->_updatestudent->ReqDeleteStudent($_POST['nomModifier'],$_POST['prenomModifier']);
    }
    require_once('views/viewModifierEtudiant.php');
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

