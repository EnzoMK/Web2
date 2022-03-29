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


        ?> <strong class="EtudiantCree"></strong><?php

    }

    public function ReqUpdateStudent($last_name_update,$first_name_update,$last_name, $first_name, $mail, $username, $password, $city_location, $name_location, $postal_code, $name_promotion)
    {

        $sqllocation = "UPDATE location SET name_location='" . $name_location . "',city_location='" . $city_location . "',postal_code_location='" . $postal_code . "' WHERE id_location=(SELECT id_location FROM user WHERE first_name = '".$first_name_update."' AND last_name = '".$last_name_update."') ";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqllocation = "UPDATE User SET first_name='" . $first_name . "',last_name='" . $last_name . "',mail='" . $mail . "',username='" . $username . "',password='" . $password . "',id_location=(SELECT id_location FROM location WHERE city_location= '" . $city_location . "' AND name_location ='" . $name_location . "' AND postal_code_location ='" . $postal_code . "'limit 1) WHERE first_name = '".$first_name_update."' AND last_name = '".$last_name_update."'";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();

        $sqlheaded = "UPDATE headed SET id_user=(Select id_user from user where first_name = '" . $first_name . "' and last_name ='" . $last_name . "' and mail = '" . $mail . "' and password = '" . $password . "'limit 1),name_promotion= '" . $name_promotion . "' WHERE id_user=(SELECT id_user FROM user WHERE first_name = '".$first_name_update."' AND last_name = '".$last_name_update."') ";
        $reqheaded = $this->getBdd()->prepare($sqlheaded);
        $reqheaded->execute();
        $reqheaded->closeCursor();


    }

    public function ReqDeleteStudent($last_name_update,$first_name_update)

        {   $sqllocation = "DELETE FROM headed WHERE id_user = (Select id_user FROM user WHERE first_name ='".$first_name_update."' AND last_name='".$last_name_update."')";
            $reqlocation = $this->getBdd()->prepare($sqllocation);
            $reqlocation->execute();
            $reqlocation->closeCursor();
            
            $sqlcompany = "DELETE FROM location WHERE id_location = (Select id_location FROM user WHERE first_name ='".$first_name_update."' AND last_name='".$last_name_update."')";
            $reqcompany = $this->getBdd()->prepare($sqlcompany);
            $reqcompany->execute();
            $reqcompany->closeCursor();

            $sqlcompany = "DELETE FROM student WHERE id_user = (Select id_user FROM user WHERE first_name ='".$first_name_update."' AND last_name='".$last_name_update."')";
            $reqcompany = $this->getBdd()->prepare($sqlcompany);
            $reqcompany->execute();
            $reqcompany->closeCursor();

         


            $sqllocation = "DELETE FROM user WHERE first_name ='".$first_name_update."' AND last_name='".$last_name_update."'";
            $reqlocation = $this->getBdd()->prepare($sqllocation);
            $reqlocation->execute();
            $reqlocation->closeCursor();

            
            

            
        }
}