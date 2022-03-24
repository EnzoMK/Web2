
<?php

//Class commune au autre classe

abstract class Model
{
    private static $_bdd;


    // INSTANCIE LA CONNEXION A LA BDD
    private static function setBdd()
    {
<<<<<<< HEAD
        self::$_bdd = new PDO('mysql:host=localhost;dbname=projetweb','root', '');
=======
        self::$_bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
>>>>>>> e316cf3c39c0a0d7ea9d2fb63304e700070d2039
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //RECUPERE LA CONNEXION A LA BDD
    protected function getBdd()
    {
        if(self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }

    /*
    protected function getAll($table, $obj) 
    {
        $var=[];
        $sql = "SELECT * FROM ".$table."" ;
        $req = $this->getBdd()->prepare($sql);
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);

        }
        return $var;
        $req->closeCursor();
    }*/
    
}

?>