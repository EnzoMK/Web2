<?php

class DelegateManager extends Model {

    public function ReqCreateDelegate($last_name, $first_name, $mail, $username, $password, $city_location, $name_location, $postal_code)
    {

        $sqllocation = "INSERT into location(name_location,city_location,postal_code_location) VALUES ('" . $name_location . "', '" . $city_location . "','" . $postal_code . "')";
        $reqlocation = $this->getBdd()->prepare($sqllocation);
        $reqlocation->execute();
        $reqlocation->closeCursor();


        $sqluser = " INSERT into user (first_name,last_name,mail,username,password,id_location) VALUES ('" . $first_name . "','" . $last_name . "','" . $mail . "','" . $username . "','" . $password . "',(SELECT id_location FROM location WHERE city_location= '" . $city_location . "' AND name_location ='" . $name_location . "' AND postal_code_location ='" . $postal_code . "'limit 1)) ";
        $requser = $this->getBdd()->prepare($sqluser);
        $requser->execute();
        $requser->closeCursor();


        $sqlstudent = "INSERT into delegate (id_user) values (( select id_user from user where first_name= '" . $first_name . "' and  last_name = '" . $last_name . "') )";
        $reqstudent = $this->getBdd()->prepare($sqlstudent);
        $reqstudent->execute();
        $reqstudent->closeCursor();

        if (isset($_POST['rechentreprise'])){
        $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '2'))";
        $reqstudent = $this->getBdd()->prepare($sqlstudent);
        $reqstudent->execute();
        $reqstudent->closeCursor();
        }

        if (isset($_POST['crentreprise']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '3'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }

        if (isset($_POST['modentreprise']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '4'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();

            $reqstudent->closeCursor();
        }

        if (isset($_POST['eventreprise']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '5'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['suppentreprise']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '6'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['statsentreprise']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '7'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['rechoffre']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '8'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['croffre']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '9'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['modoffre']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '10'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['suppoffre']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '11'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['statsoffre']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '12'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['rechpilote']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '13'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['crpilote']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '14'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['modpilote']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '15'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['supppilote']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '16'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['rechdelegue']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '17'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['crdelegue']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '18'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['moddelegue']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '19'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['suppdelegue']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '20'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['droitdelegue']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '21'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['rechetudiant']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '22'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['cretudiant']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '23'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['modetudiant']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '24'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }
        if (isset($_POST['suppetudiant']))
        {
            $sqlstudent = "INSERT into has (id_delegate,id_permission) values ((Select id_delegate from delegate WHERE id_user=(Select id_user from user WHERE  first_name= '" . $first_name . "' and  last_name = '" . $last_name . "' )),(Select id_permission FROM permission WHERE id_permission = '25'))";
            $reqstudent = $this->getBdd()->prepare($sqlstudent);
            $reqstudent->execute();
            $reqstudent->closeCursor();
        }


        


    }




}