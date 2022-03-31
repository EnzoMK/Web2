<?php

class PromotionManager extends Model
{
    public function getAllPromotion()
    {
        $sql = "SELECT * FROM promotion ";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Pilot($data);

        }
        return $var;
        $req->closeCursor();
    }

}