<?php


abstract class Model
{
    private static $_bdd;


    // INSTANCIE LA CONNEXION A LA BDD

    protected function getAll($table, $obj)
    {
        $var = [];
        $sql = "SELECT * FROM " . $table . "";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);

        }
        return $var;
        $req->closeCursor();
    }

    //RECUPERE LA CONNEXION A LA BDD

    protected function getBdd()
    {
        if (self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }

    private static function setBdd()
    {
        self::$_bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

}