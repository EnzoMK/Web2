<?php

class StudentManager extends Model
{
    public function getAllStudent()
    {

        $sql = "SELECT * FROM student ";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Delegate($data);

        }
        return $var;
        $req->closeCursor();

    }

}