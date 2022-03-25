<?php

class CreateStudent extends Model
{

    public function ReqCreateStudent($last_name, $first_name, $mail, $username, $password, $city_location, $name_location, $postal_code, $name_promotion)
    {

        $sqllocation = "INSERT into location(name_location,city_location,postal_code_location) VALUES ('" . $name_location . "', '" . $city_location . "','" . $postal_code . "')";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqluser = " INSERT into user (first_name,last_name,mail,username,password,id_location) VALUES ('" . $first_name . "','" . $last_name . "','" . $mail . "','" . $username . "','" . $password . "',(SELECT id_location FROM location WHERE city_location= '" . $city_location . "' AND name_location ='" . $name_location . "' AND postal_code_location ='" . $postal_code . "'limit 1)) ";
        $requser = $this->getBdd()->prepare($sqluser);
        $requser->execute();
        $requser->closeCursor();

        $sqlheaded = "INSERT into headed(id_user,name_promotion) values ((Select id_user from user where first_name = '" . $first_name . "' and last_name ='" . $last_name . "' and mail = '" . $mail . "' and password = '" . $password . "'limit 1),'" . $name_promotion . "')";
        $reqheaded = $this->getBdd()->prepare($sqlheaded);
        $reqheaded->execute();
        $reqheaded->closeCursor();

        $sqlstudent = "INSERT into student (id_user) values (( select id_user from user where first_name= '" . $first_name . "' and  last_name = '" . $last_name . "') )";
        $reqstudent = $this->getBdd()->prepare($sqlstudent);
        $reqstudent->execute();
        $reqstudent->closeCursor();


        ?> <strong class="EtudiantCree"> <?php echo "étudiant créé"; ?> </strong><?php

        

    }
}