<?php

class Pilot extends Model
{
    private $_id_pilot;
    private $_id_user;

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

    public function getId_pilot()
    {
        return $this->_id_pilot;
    }

    public function setId_pilot($id_pilot)
    {
        $this->_id_pilot = $id_pilot;
    }


    //GETTERS

    public function getId_user()
    {
        return $this->_id_user;
    }

    public function setId_user($id_user)
    {
        $this->_id_user = $id_user;
    }


}