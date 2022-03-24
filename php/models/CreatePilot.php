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
    }


}