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

public function takeRole($mail, $password)
    {
        $sql1 = "SELECT id_user FROM user WHERE mail='".$mail."' AND password='".$password."'" ;
        $req1 = $this->getBdd()->prepare($sql1);
        $req1->execute();

        $var1=[];
        while($data = $req1->fetch(PDO::FETCH_ASSOC))
        {
            $var1[] = new User($data);

        }
        
        $req1->closeCursor();
        ?>
        <?php foreach ($var1 as $vare): ?>
            <?php $roleTest = $vare->getId_user() ?>
        <?php endforeach; ?><?php

        $sql2 = "SELECT * FROM admin WHERE id_user = '".$roleTest."'" ;
        $req2 = $this->getBdd()->prepare($sql2);
        $req2->execute();

        if($req2->rowCount() == 1){
            $role = 1;
            return $role;
        }
        $req2->closeCursor();

        $sql3 = "SELECT * FROM pilot WHERE id_user = '".$roleTest."'" ;
        $req3 = $this->getBdd()->prepare($sql3);
        $req3->execute();

        if($req3->rowCount() == 1){
            $role = 2;
            return $role;
        }
        $req3->closeCursor();

        $sql4 = "SELECT * FROM student WHERE id_user = '".$roleTest."'" ;
        $req4 = $this->getBdd()->prepare($sql4);
        $req4->execute();

        if($req4->rowCount() == 1){
            $role = 3;
            return $role;
        }
        $req4->closeCursor();
        
        $sql5 = "SELECT id_delegate FROM delegate WHERE id_user = '".$roleTest."'" ;
        $req5 = $this->getBdd()->prepare($sql5);
        $req5->execute();
        
        if($req5->rowCount() >= 1){

            $var2=[];
            while($data2 = $req5->fetch(PDO::FETCH_ASSOC))
            {
                $var2[] = new Delegate($data2);

            }
            ?>
            <?php foreach ($var2 as $varesse): ?>
            <?php $id_delegue = $varesse->getId_delegate() ?>
            <?php endforeach; ?><?php

            $sql6 = "SELECT id_permission FROM has WHERE id_delegate = '".$id_delegue."'" ;
            $req6 = $this->getBdd()->prepare($sql6);
            $req6->execute();

            $var3=[];
            while($data2 = $req6->fetch(PDO::FETCH_ASSOC))
            {
                $var3[] = new Has($data2);
            }

            ?>
            <?php foreach ($var3 as $varessee): ?>
            <?php $id_permission = array($varessee->getId_permission()) ?>
            <?php endforeach; ?><?php

            return $id_permission;
        }
        $req5->closeCursor();


}

    
}
?>