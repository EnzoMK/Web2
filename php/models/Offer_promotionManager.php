<?php

class Offer_promotionManager extends Model
{
    public function getAllOfferPromotion()
    {
        $sql = "SELECT * FROM offer_promotion ";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Offer_promotion($data);

        }
        return $var;
        $req->closeCursor();
    }
}