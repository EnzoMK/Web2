<!-- Creer une classe qui va permettre de controler la page de modification d'un étudiant -->
<?php

class ControllerUpdatestudent{

// constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->updatestudent();
    }


 // fonction qui execute toutes les nécéssitées :
private function updatestudent(){

    $this->_updatestudent = new Createstudent();

if (isset($_SESSION['email'])) {
    if(in_array("24", $_SESSION['role']) || in_array("25", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
    if (isset($_POST['deconnexion'])) {
        unset($_SESSION['email']);
        header("Location: index.php?url=identification");
    }
    if (isset($_POST['submitUpdate'])) {
        if(!empty($_POST['nomModifier']) && !empty($_POST['prenomModifier']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['motdepasse']) && !empty($_POST['villeducentre']) && !empty($_POST['centre']) && !empty($_POST['codepostal']) && !empty($_POST['promotion'])){
        if(in_array("24", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
            $password = hash("sha256",$_POST['password']);
        $this->_updatestudent->ReqUpdateStudent($_POST['nomModifier'],$_POST['prenomModifier'],$_POST['nom'], $_POST['prenom'], $_POST['mail'], $password, $_POST['villeducentre'], $_POST['centre'], $_POST['codepostal'], $_POST['promotion']);
        header("Location: index.php?url=pagefincm");
    }
        else {
            header("Location: index.php?url=erreur");
        }
    }
    else 
            {
                $_POST['error']=true;
            }
}
    if (isset($_POST['supprimer'])) {
        if(in_array("25", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){
        if(!empty($_POST['nomModifier']) && !empty($_POST['prenomModifier'])){
        $this->_updatestudent->ReqDeleteStudent($_POST['nomModifier'],$_POST['prenomModifier']);
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

