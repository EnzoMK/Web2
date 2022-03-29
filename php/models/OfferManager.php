<?php

class OfferManager extends Model {

    public function getAllOffer()
    {
        $sql = "SELECT * FROM `offer`" ;
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Company($data);

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
}

?>