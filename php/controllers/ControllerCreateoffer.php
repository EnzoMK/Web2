<!-- Creer une classe qui va permettre de controler la page création offre-->
<?php

class ControllerCreateoffer
{
    private $_compte;
    private $_view;


// constructeur de la page
    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->createoffer();
    }


    // fonction qui execute toutes les nécéssitées :
    private function createoffer()
    {
        $this->_objmodeloffre = new OfferManager();
        $this->_company = new CompanyManager();
        $companys = $this->_company->getAllCompany();

        $this->_skill = new SkillManager();
        $skills = $this->_skill->getAllSkill();

        if (isset($_POST['submitCreate'])) {
            if(!empty($_POST['nom']) && !empty($_POST['dureeoffre']) && !empty($_POST['basederemuneration']) && !empty($_POST['datedebut']) && !empty($_POST['datefin']) && !empty($_POST['nombreplace']) && !empty($_POST['nomcompany']) && !empty($_POST['skill']) && !empty( $_POST['descriptionoffre']) && !empty($_POST['promotion'])){
            $this->_objmodeloffre->ReqCreateOffer($_POST['nom'], $_POST['dureeoffre'], $_POST['basederemuneration'], $_POST['datedebut'], $_POST['datefin'], $_POST['nombreplace'], $_POST['nomcompany'], $_POST['skill'], $_POST['descriptionoffre'], $_POST['promotion']);
            header("Location: index.php?url=pagefincm");
        }
        else 
            {
                $_POST['error']=true;
            }

    }
        if (isset($_SESSION['email'])) {
            if (in_array("9", $_SESSION['role']) || in_array("40", $_SESSION['role']) || in_array("30", $_SESSION['role'])) {
                if (isset($_POST['deconnexion'])) {
                    unset($_SESSION['role']);
                    unset($_SESSION['email']);
                    header("Location: index.php?url=identification");
                }
                require_once('views/viewCreationoffre.php');
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