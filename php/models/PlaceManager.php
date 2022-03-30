<?php

class PlaceManager extends Model
{
    public function getAllPlace()
    {
        $sql = "SELECT * FROM place ";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Place($data);

        }
        return $var;
        $req->closeCursor();
    }
}