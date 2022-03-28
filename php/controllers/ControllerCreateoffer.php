

<?php

class ControllerCreateoffer
{
    private $_compte;
    private $_view;



    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */ 
            $this->createoffer();
    }

    private function createoffer()
    {
        $this->_objmodeloffre = new OfferManager();
        $this->_company = new CompanyManager();
        $companys = $this->_company->getAllCompany();

        $this->_skill = new SkillManager();
        $skills = $this->_skill->getAllSkill();

        if (isset($_POST['submitCreate'])) {
            $this->_objmodeloffre->ReqCreateOffer($_POST['nom'], $_POST['dureeoffre'], $_POST['basederemuneration'], $_POST['datedebut'], $_POST['datefin'], $_POST['nombreplace'], $_POST['nomcompany'], $_POST['skill'], $_POST['descriptionoffre'], $_POST['promotion']);

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