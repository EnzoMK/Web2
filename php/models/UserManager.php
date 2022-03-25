<?php

class UserManager extends Model
{

    public function getUsers()
    {
        $sql = "SELECT * FROM user WHERE mail='".$_SESSION['email']."'" ;
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var=[];
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new User($data);

        }
        return $var;
        $req->closeCursor();
    }

    public function verifUsers($mail, $password)
    {
        $sql = "SELECT * FROM user WHERE mail='".$mail."' AND password='".$password."'" ;
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

            if($req->rowCount() == 1){
                
                header("Location: index.php?url=acceuil");
                return $mail;
            }
            else 
            {
            ?>
            <p class="ConnectionEchoue">Connexion echouée</p>
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