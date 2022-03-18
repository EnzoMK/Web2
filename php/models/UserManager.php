<?php

class UserManager extends Model
{
    /*
    public function getUsers()
    {
        return $this->getAll('user','Users');
    }
    */
    public function verifUsers($mail, $password)
    {
        $sql = "SELECT * FROM user WHERE mail='".$mail."' AND password='".$password."'" ;
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        if($req->rowCount() == 1){
            echo "Connection effectuée";
            $_SESSION['email'] = $mail;
        }
        else 
        {
        echo"Connection échoué";
        }
        /*
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new User($data);
        }
        return $var; */
        $req->closeCursor();
}
}
?>