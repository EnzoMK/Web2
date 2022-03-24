<?php

class Createcompany extends Model
{
    public function ReqCreatePilot($username, $mail, $password, $city_location, $name_location, $postal_code)
    {
        $sqllocation = "INSERT into Location (city_location,postal_code_location) VALUES ( '" . $city_location . "','" . $postal_code . "')";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqluser = " INSERT into user (username ,mail,password,id_location) VALUES ('" . $username . "','" . $mail . "','" . $password . "',(SELECT id_location FROM location WHERE city_location= '" . $city_location . "' AND name_location ='" . $name_location . "' AND postal_code_location ='" . $postal_code . "'limit 1)) ";
        $requser = $this->getBdd()->prepare($sqluser);
        $requser->execute();
        $requser->closeCursor();


        $sqlcompany = "";
        $reqcompany = $this->getBdd()->prepare($sqlcompany);
        $reqcompany->execute();
        $reqcompany->closeCursor();
    }

}