<!-- Creer une classe qui va permettre de controler la page création délégué -->
<?php

class ControllerCreatedelegate
{
    private $_compte;
    private $_view;


// constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->createdelegate();
    }

    // fonction qui execute toutes les nécéssitées :
    private function createdelegate()
    {
        $this->_createdelegate = new DelegateManager();
        if(isset($_SESSION['email'])){
            if(in_array("18", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){

            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }

                
if (isset($_POST['submitCreate'])) {
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['ville']) && !empty($_POST['namecenter']) && !empty($_POST['codepostal'])){
        
        $password = hash("sha256",$_POST['password']);
        
        $this->_createdelegate->ReqCreateDelegate($_POST['nom'], $_POST['prenom'], $_POST['email'], $password, $_POST['ville'], $_POST['namecenter'], $_POST['codepostal']);
        header("Location: index.php?url=pagefincm");
}
else 
{
$_POST['error']=true;
}
}
            
            require_once('views/viewCreationDelegue.php');
        }
        else 
        {
            header("Location: index.php?url=erreur");
        }

        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>