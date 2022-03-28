<?php

class Skill
{
    private $name_skill;

    public function __construct(array $data)
    {
        $this->hydrate($data);

    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }


    //CONSTRUCTEUR

    public function getNameSkill()
    {
        return $this->name_skill;
    }

    //HYDRATATION
    //securite maximum
    //renvoyer au differents setters pour mettre a jour les données

    public function setNameSkill($name_skill): void
    {
        $this->name_skill = $name_skill;
    }
}