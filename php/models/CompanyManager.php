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

    }
?>