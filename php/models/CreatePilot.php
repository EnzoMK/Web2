<?php

class CreatePilot extends Model
{
    public function ReqCreatePilot($last_name, $first_name, $mail, $password, $city_location, $name_location, $postal_code)
    {
        $sqllocation = "INSERT into Location (name_location,city_location,postal_code_location) VALUES ('" . $name_location . "', '" . $city_location . "','" . $postal_code . "')";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqluser = " INSERT into user (first_name,last_name,mail,password,id_location) VALUES ('" . $first_name . "','" . $last_name . "','" . $mail . "','" . $password . "',(SELECT id_location FROM location WHERE city_location= '" . $city_location . "' AND name_location ='" . $name_location . "' AND postal_code_location ='" . $postal_code . "'limit 1)) ";
        $requser = $this->getBdd()->prepare($sqluser);
        $requser->execute();
        $requser->closeCursor();


        $sqlpilot = "INSERT into PILOT (id_user) values (( select id_user from user where first_name= '" . $first_name . "' and  last_name = '" . $last_name . "') )";
        $reqpilot = $this->getBdd()->prepare($sqlpilot);
        $reqpilot->execute();
        $reqpilot->closeCursor();

        // $sqlpilot = "INSERT into headed (id_user, name_promotion) values (( select id_user from user where first_name = '" . $first_name . "' and  last_name = '" . $last_name . "'), (SELECT name_promotion from promotion where name_promotion='" . $name_promotion . "' )";
        // $reqpilot = $this->getBdd()->prepare($sqlpilot);
        // $reqpilot->execute();
        // $reqpilot->closeCursor();

    }

    public function ReqUpdatePilote($last_name_update,$first_name_update,$last_name, $first_name, $mail, $password, $city_location, $name_location, $postal_code, $name_promotion)
    {

        $sqllocation = "UPDATE location SET name_location='" . $name_location . "',city_location='" . $city_location . "',postal_code_location='" . $postal_code . "' WHERE id_location=(SELECT id_location FROM user WHERE first_name = '".$first_name_update."' AND last_name = '".$last_name_update."') ";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqllocation = "UPDATE User SET first_name='" . $first_name . "',last_name='" . $last_name . "',mail='" . $mail . "',password='" . $password . "',id_location=(SELECT id_location FROM location WHERE city_location= '" . $city_location . "' AND name_location ='" . $name_location . "' AND postal_code_location ='" . $postal_code . "'limit 1) WHERE first_name = '".$first_name_update."' AND last_name = '".$last_name_update."'";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();


    }

    public function ReqDeletePilote($last_name_update,$first_name_update)

        {
            $sqlcompany = "DELETE FROM location WHERE id_location = (Select id_location FROM user WHERE first_name ='".$first_name_update."' AND last_name='".$last_name_update."')";
            $reqcompany = $this->getBdd()->prepare($sqlcompany);
            $reqcompany->execute();
            $reqcompany->closeCursor();

            $sqllocation = "DELETE FROM user WHERE first_name ='".$first_name_update."' AND last_name='".$last_name_update."'";
            $reqlocation = $this->getBdd()->prepare($sqllocation);
            $reqlocation->execute();
            $reqlocation->closeCursor();

            $sqlcompany = "DELETE FROM pilot WHERE id_user = (Select id_user FROM user WHERE first_name ='".$first_name_update."' AND last_name='".$last_name_update."')";
            $reqcompany = $this->getBdd()->prepare($sqlcompany);
            $reqcompany->execute();
            $reqcompany->closeCursor();
        }


}