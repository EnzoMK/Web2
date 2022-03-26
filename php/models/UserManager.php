<?php

class UserManager extends Model
{

    public function getUsersLocation()
    {
        $sql = "SELECT * FROM location WHERE id_location = (Select id_location FROM user WHERE mail='".$_SESSION['email']."')";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var=[];
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Location($data);

        }
        return $var;
        $req->closeCursor();
    }

    public function getStudentLocation()
    {
        $sql = "SELECT * FROM location INNER JOIN user ON location.id_location = user.id_location INNER JOIN student on user.id_user = student.id_user";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var=[];
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Location($data);

        }
        return $var;
        $req->closeCursor();
    }

    public function getAllStudent()
    {
        $sql = "SELECT * FROM user INNER JOIN student ON user.id_user = student.id_user" ;
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

    public function getPiloteLocation()
    {
        $sql = "SELECT * FROM location INNER JOIN user ON location.id_location = user.id_location INNER JOIN pilot on user.id_user = pilot.id_user";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var=[];
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Location($data);

        }
        return $var;
        $req->closeCursor();
    }

    public function getAllPilote()
    {
        $sql = "SELECT * FROM user INNER JOIN pilot ON user.id_user = pilot.id_user" ;
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

    public function getDelegueLocation()
    {
        $sql = "SELECT * FROM location INNER JOIN user ON location.id_location = user.id_location INNER JOIN delegate on user.id_user = delegate.id_user";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var=[];
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Location($data);

        }
        return $var;
        $req->closeCursor();
    }

    public function getAllDelegue()
    {
        $sql = "SELECT * FROM user INNER JOIN delegate ON user.id_user = delegate.id_user" ;
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


        $req->closeCursor();
}

    
}
?>