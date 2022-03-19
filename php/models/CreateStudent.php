<?php

class CreateStudent extends Model
{

    public function CreateStudent($nom, $prenom, $mail, $username, $mdp, $location)
    {
        $sql = " insert into user (first_name, last_name, mail, username, password, id_location) VALUES ('" . $prenom . "','" . $nom . "','" . $mail . "','" . $username . "','" . $mdp . "',( select id_location from location where city_location= '" . $location . "') ";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

    }
}