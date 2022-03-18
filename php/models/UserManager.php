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
            $_SESSION['email'] = $mail;
            header('Location: views/viewAcceuil.php');
        }
        else 
        {
        ?>
        <strong class="ConnectionEchoue"> <?php echo"Connection échoué"; ?> </strong>
        <style>
            .ConnectionEchoue {position:relative; color:rgb(255, 0, 0);height:50px;}
        </style>
        <?php
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