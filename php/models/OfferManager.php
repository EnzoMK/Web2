<?php

class OfferManager extends Model {

    public function getAllOffer()
    {
        $sql = "SELECT * FROM offer " ;
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Offer($data);

        }
        return $var;
        $req->closeCursor();
    }

    public function ReqCreateOffer($nomdeloffre, $duree, $basedermuneration, $datedebut, $datefin, $nombredeplace, $nomcompany, $skill, $descriptionoffer, $promotion)
    {

        $sqloffer = "insert into offer (internship_duration,remuneration,number_place,start_intership_date,end_intership_date,publication_date,id_company,name_offer,description_offer) values ('" . $duree . "','" . $basedermuneration . "','" . $nombredeplace . "','" . $datedebut . "','" . $datefin . "',(select now()),(select id_company from company where name_company='" . $nomcompany . "'limit 1),'" . $nomdeloffre . "','" . $descriptionoffer . "')";
        $reqoffer = $this->getBdd()->prepare($sqloffer);
        $reqoffer->execute();
        $reqoffer->closeCursor();

        $sqlofferskill = "insert into offer_skills (name_skill,id_offer) values ('" . $skill . "',(select id_offer from offer where name_offer = '" . $nomdeloffre . "' and description_offer = '" . $descriptionoffer . "'limit 1))";
        $reqofferprskill = $this->getBdd()->prepare($sqlofferskill);
        $reqofferprskill->execute();
        $reqofferprskill->closeCursor();

        $sqlofferpromotion = "insert into offer_promotion (id_offer,name_promotion) values ((select id_offer from offer where name_offer = '" . $nomdeloffre . "' and description_offer = '" . $descriptionoffer . "'limit 1),'" . $promotion . "')";
        $reqofferpromotion = $this->getBdd()->prepare($sqlofferpromotion);
        $reqofferpromotion->execute();
        $reqofferpromotion->closeCursor();
    }

    public function getAllOfferCompany($name)
    {
        $sqllocation = "SELECT * FROM offer WHERE id_company =(Select id_company from company WHERE name_company ='".$name."' ) ";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $var=[];
        while($data = $reqlocation->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Offer($data);

        }
        return $var;
        $reqlocation->closeCursor();
    }

    public function getAllCompanyOffer()
    {
        $sqllocation = "SELECT * FROM offer INNER JOIN company ON offer.id_company = company.id_company";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $var=[];
        while($data = $reqlocation->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Company($data);

        }
        return $var;
        $reqlocation->closeCursor();
    }

    public function getAllPromotionOffer()
    {
        $sqllocation = "SELECT * FROM offer INNER JOIN Offer_promotion ON offer.id_offer = Offer_promotion.id_offer INNER JOIN promotion ON Offer_promotion.name_promotion = promotion.name_promotion";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $var=[];
        while($data = $reqlocation->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Promotion($data);

        }
        return $var;
        $reqlocation->closeCursor();
    }

    public function getAllSkillOffer()
    {
        $sqllocation = "SELECT * FROM offer INNER JOIN offer_skills ON offer.id_offer = offer_skills.id_offer INNER JOIN Skill ON Skill.name_skill = offer_skills.name_skill";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $var=[];
        while($data = $reqlocation->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Skill($data);

        }
        return $var;
        $reqlocation->closeCursor();
    }

    public function getAllOfferCompetence($name){

        $sqllocation = "SELECT * FROM offer WHERE id_offer =(Select id_offer from offer_skills WHERE name_skill ='".$name."' ) ";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $var=[];
        while($data = $reqlocation->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Offer($data);

        }
        return $var;
        $reqlocation->closeCursor();
    }

    public function getAllOfferPromotion($name){

        $sqllocation = "SELECT * FROM offer WHERE id_offer =(Select id_offer from offer_promotion WHERE name_promotion ='".$name."' ) ";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $var=[];
        while($data = $reqlocation->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Offer($data);

        }
        return $var;
        $reqlocation->closeCursor();
    }

    public function getAllOfferDateDebut($name){

        $sqllocation = "SELECT * FROM offer WHERE start_intership_date = '".$name."' ";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $var=[];
        while($data = $reqlocation->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Offer($data);

        }
        return $var;
        $reqlocation->closeCursor();
    }

    public function getAllOfferDateFin($name){

        $sqllocation = "SELECT * FROM offer WHERE send_intership_date = '".$name."' ";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $var=[];
        while($data = $reqlocation->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Offer($data);

        }
        return $var;
        $reqlocation->closeCursor();
    }

    public function ReqUpdateOffer($nomdeloffre, $duree, $basedermuneration, $datedebut, $datefin, $nombredeplace, $nomcompany, $skill, $descriptionoffer, $promotion)

    {       
        $sqloffer = "UPDATE offer SET internship_duration='" . $duree . "',remuneration='" . $basedermuneration . "',number_place='" . $nombredeplace . "',start_intership_date='". $datedebut .",end_intership_date='". $datefin .",'$nombredeplace='". $nombredeplace ."',name_offer='" . $nomdeloffre ."',description_offer='". $descriptionoffer . "'where nomdeloffre";
        $reqoffer = $this->getBdd()->prepare($sqloffer);
        $reqoffer->execute();
        $reqoffer->closeCursor();
    
        $sqlofferskill = "UPDATE offer_skills SET nameskill='" . $skill . "',name_offer='" . $nomdeloffre ."',description_offer='". $descriptionoffer . "'where nomdeloffre";
        $reqofferprskill = $this->getBdd()->prepare($sqlofferskill);
        $reqofferprskill->execute();
        $reqofferprskill->closeCursor();
    
        $sqlofferpromotion = "UPDATE offer_promotion SET namepromotion='" . $promotion;
        $reqofferpromotion = $this->getBdd()->prepare($sqlofferpromotion);
        $reqofferpromotion->execute();
        $reqofferpromotion->closeCursor();
    

        
    }

public function ReqDeleteOffer($nomdeloffre)

    {       
        $sqloffer = "DELETE FROM offer WHERE id_offer";
        $reqoffer = $this->getBdd()->prepare($sqloffer);
        $reqoffer->execute();
        $reqoffer->closeCursor();
    
        $sqlofferskill = "DELETE FROM offer_skills WHERE id_offer";
        $reqofferprskill = $this->getBdd()->prepare($sqlofferskill);
        $reqofferprskill->execute();
        $reqofferprskill->closeCursor();
    
        $sqlofferpromotion = "DELETE FROM offer_promotion WHERE id_offer";
        $reqofferpromotion = $this->getBdd()->prepare($sqlofferpromotion);
        $reqofferpromotion->execute();
        $reqofferpromotion->closeCursor();
    

        
    }
}



?>