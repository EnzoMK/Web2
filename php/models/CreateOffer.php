<?php

class CreateOffer extends Model
{

    public function ReqCreateOffer($name_location, $city_location, $postal_code, $name_company, $activity_area, $number_of_student, $confidence_promotion_Pilot)
    {
        $sqllocation = "INSERT into Location (name_location,city_location,postal_code_location) VALUES ('" . $name_location . "','" . $city_location . "','" . $postal_code . "')";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqlcompany = "INSERT INTO company (name_company,activity_area,number_of_cesi_interns,confidence_promotion_Pilot) values ('" . $name_company . "','" . $activity_area . "','" . $number_of_student . "','" . $confidence_promotion_Pilot . "')";
        $reqcompany = $this->getBdd()->prepare($sqlcompany);
        $reqcompany->execute();
        $reqcompany->closeCursor();


        $sqlplace = "INSERT INTO place (id_location,id_company) Values ((select id_location from location where name_location='" . $name_location . "'and city_location = '" . $city_location . "' and postal_code_location='" . $postal_code . "' limit 1),(select id_company from company where name_company='" . $name_company . "' and activity_area='" . $activity_area . "' and number_of_cesi_interns='" . $number_of_student . "' and confidence_promotion_Pilot='" . $confidence_promotion_Pilot . "' limit 1))";
        $reqplace = $this->getBdd()->prepare($sqlplace);
        $reqplace->execute();
        $reqplace->closeCursor();


    }


}