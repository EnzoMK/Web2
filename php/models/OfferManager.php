<?php

class OfferManager extends Model {

    public function getAllOffer()
    {
        $sql = "SELECT * FROM `offer`" ;
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var=[];
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Company($data);

        }
        return $var;
        $req->closeCursor();
    }


}

?>