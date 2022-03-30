

<?php

class ControllerAcceuil
{
    private $_acceuil;
    private $_view;
    private $_offer;
    private $_company;
    private $_place;
    private $_offer_promotion;
    private $_skill;

    public function __construct($url)
    {
        /*if (isset($url) && count($url)>1)
            throw new Exception('Page introuvable');
        else */
        $this->acceuil();
    }


    private function acceuil()
    {
        $this->_offer = new OfferManager();
        $offers = $this->_offer->getAllOffer();
        $numerotile = 1;

        $this->_company = new CompanyManager();
        $companys = $this->_company->getAllCompany();
        $locations = $this->_company->getCompanyLocation();


        $this->_offer_promotion = new Offer_promotionManager();
        $offer_promotions = $this->_offer_promotion->getAllOfferPromotion();

        $this->_skill = new SkillManager();
        $skills = $this->_skill->getAllSkill();


        $this->_place = new PlaceManager();
        $places = $this->_place->getAllPlace();

        $this->_skill = new SkillManager();
        $skills = $this->_skill->getAllSkill();
        if (isset($_SESSION['email'])) {

            if (isset($_POST['deconnexion'])) {
                unset($_SESSION['role']);
                unset($_SESSION['email']);

                header("Location: index.php?url=identification");
            }
            require_once('views/viewAccueil.php');


        }
        else {
            header("Location: index.php?url=identification");
        }
    }
}

?>