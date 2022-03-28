<?php

class SkillManager extends Model
{
    public function getAllSkill()
    {
        $sql = "SELECT * FROM `skill`";
        $req = $this->getBdd()->prepare($sql);
        $req->execute();

        $var = [];
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Skill($data);

        }
        return $var;
        $req->closeCursor();
    }

}