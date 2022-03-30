<?php

class Place extends Model
{
    private $_id_location;
    private $_id_company;

    //CONSTRUCTEUR
    public function __construct(array $data)
    {
        $this->hydrate($data);

    }

    //HYDRATATION
    //securite maximum
    //renvoyer au differents setters pour mettre a jour les données
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }

    //SETTERS

    public function getId_location()
    {
        return $this->_id_location;
    }

    public function setId_location($id_location)
    {
        $this->_id_location = $id_location;
    }


    //GETTERS

    public function getId_company()
    {
        return $this->_id_company;
    }

    public function setId_company($id_company)
    {
        $this->_id_company = $id_company;
    }

}