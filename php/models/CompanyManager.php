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
        $sql = "SELECT * FROM location INNER JOIN place ON location.id_location = place.id_location INNER JOIN company ON place.id_company = company.id_company";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        $var1 = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Location($data);

        }
        return $var;
        $req->closeCursor();
    }

    public function getCompanyLocationname($name)
    {
        $sql = "SELECT city_location FROM location INNER JOIN place ON location.id_location = place.id_location INNER JOIN company ON place.id_company = company.id_company where name_company='" . $name . "'limit 1";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Location($data);

        }
        return $var;
        $req->closeCursor();
    }
    public function ReqUpdateCompany($name_location, $city_location, $postal_code, $name_company,$name_modif, $activity_area, $number_of_student, $confidence_promotion_Pilot)
    {

        $sqllocation = "UPDATE location SET name_location='" . $name_location . "', city_location='" . $city_location . "',postal_code_location ='" . $postal_code . "' WHERE id_location = (Select id_location FROM place WHERE id_company = (SELECT id_company FROM Company WHERE name_company='".$name_modif."'))";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqlcompany = "UPDATE company SET name_company='" . $name_company . "',activity_area='" . $activity_area . "',number_of_cesi_interns='" . $number_of_student . "',confidence_promotion_Pilot='" . $confidence_promotion_Pilot . "'WHERE name_company = '".$name_modif."'";
        $reqcompany = $this->getBdd()->prepare($sqlcompany);
        $reqcompany->execute();
        $reqcompany->closeCursor();
    }

    public function ReqSupprimerCompany($name_modif)
    {
        $sqllocation = "DELETE FROM place WHERE id_company = (SELECT id_company FROM Company WHERE name_company='".$name_modif."')";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqllocation = "DELETE FROM location WHERE id_location = (Select id_location FROM place WHERE id_company = (SELECT id_company FROM Company WHERE name_company='".$name_modif."'))";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqlcompany = "DELETE FROM company WHERE name_company = '".$name_modif."'";
        $reqcompany = $this->getBdd()->prepare($sqlcompany);
        $reqcompany->execute();
        $reqcompany->closeCursor();
    }


    public function getAllCompanyName($name)
    {
        $sqllocation = "SELECT * FROM company WHERE name_company = '".$name."'";
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

    public function getAllCompanySecteur($name)
    {
        $sqllocation = "SELECT * FROM company WHERE activity_area = '".$name."'";
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

    public function getAllCompanyCity($name)
    {
        $sqllocation = "SELECT * FROM company WHERE id_company =(Select id_company from place WHERE id_location =(Select id_location FROM location WHERE city_location = '".$name."')) ";
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


    }
?>