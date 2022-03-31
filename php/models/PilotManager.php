<?php

class PilotManager extends Model
{
    public function getAllPilot()
    {
        $sql = "SELECT * FROM pilot ";
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