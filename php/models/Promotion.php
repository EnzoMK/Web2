<?php

class Promotion
{
    private $_name_promotion;

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

    public function getName_promotion()
    {
        return $this->_name_promotion;
    }

    //HYDRATATION
    //securite maximum
    //renvoyer au differents setters pour mettre a jour les données

    public function setName_promotion($name_promotion): void
    {
        $this->_name_promotion = $name_promotion;
    }
}