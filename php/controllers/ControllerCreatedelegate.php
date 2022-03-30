

<?php

class ControllerCreatedelegate
{
    private $_compte;
    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->createdelegate();
    }

    private function createdelegate()
    {

        if(isset($_SESSION['email'])){
            if(in_array("18", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])){

            if (isset($_POST['deconnexion']))
                {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }

                $this->_createdelegate = new DelegateManager();

                
if (isset($_POST['submitCreate'])) {
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['ville']) && !empty($_POST['namecenter']) && !empty($_POST['codepostal'])){
    $this->_createdelegate->ReqCreateDelegate($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pseudo'], $_POST['password'], $_POST['ville'], $_POST['namecenter'], $_POST['codepostal']);
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