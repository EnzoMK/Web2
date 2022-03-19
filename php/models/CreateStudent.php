<?php

class CreateStudent extends Model
{

    public function ReqCreateStudent($last_name, $first_name, $mail, $username, $password, $city_location, $name_location, $postal_code, $name_promotion)
    {


        $sqllocation = "Insert into location(name_location,city_location,postal_code_location) VALUES ('" . $name_location . "', '" . $city_location . "','" . $postal_code . "')";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();

        $sqluser = " insert into user (first_name, last_name, mail, username, password, id_location) VALUES ('" . $first_name . "','" . $last_name . "','" . $mail . "','" . $username . "','" . $password . "',( select id_location from location where city_location= '" . $city_location . "') ";
        $requser = $this->getBdd()->prepare($sqluser);
        $requser->execute();

        $sqlheaded = "Insert into headed(id_user,name_promotion) values ((Select id_user from user where first_name = '" . $first_name . "' and last_name ='" . $last_name . "' and mail = '" . $mail . "' and password = '" . $password . "'),'" . $name_promotion . "')";
        $reqheaded = $this->getBdd()->prepare($sqlheaded);
        $reqheaded->execute();

        $sqlstudent = "insert into student (id_user) values (( select id_user from user where first_name= '" . $first_name . "' and  last_name = '" . $last_name . "') )";
        $reqstudent = $this->getBdd()->prepare($sqlstudent);
        $reqstudent->execute();


        ?> <strong class="EtudiantCree"> <?php echo "étudiant créé"; ?> </strong><?php

    }
}