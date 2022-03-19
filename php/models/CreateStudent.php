<?php

class CreateStudent extends Model
{

    public function CreateStudent($nom, $prenom, $mail, $username, $mdp, $location)
    {
        $sqluser = " insert into user (first_name, last_name, mail, username, password, id_location) VALUES ('" . $prenom . "','" . $nom . "','" . $mail . "','" . $username . "','" . $mdp . "',( select id_location from location where city_location= '" . $location . "') ";
        $requser = $this->getBdd()->prepare($sqluser);
        $requser->execute();

        $sqlstudent = "insert into student (id_user) values (( select id_user from user where first_name= '" . $prenom . "' and  last_name = '" . $nom . "') )";
        $reqstudent = $this->getBdd()->prepare($sqlstudent);
        $reqstudent->execute();
        if ($reqstudent->rowCount() == 0) {


            ?> <strong class="EtudiantCree"> <?php echo "étudiant créé"; ?> </strong><?php
        }
    }
}