<?php

class CompanyManager extends Model{

    public function getAllCompany()
        {
            $sql = "SELECT * FROM company " ;
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

    
    public function getCompanyLocation()
    {
        $sql = "SELECT * FROM location INNER JOIN company ON location.id_location = company.id_location";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var=[];
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Location($data);

        }
        return $var;
        $req->closeCursor();
    }

    }
?>