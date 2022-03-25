<?php

//class pour récupérer toute les données de la classe user

class Location 
{
    private $_id_location;
    private $_name_location;
    private $_city_location;
    private $_postal_code_location;

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
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
                $this->$method($value);
        }
    }

    //SETTERS
    public function setId_location($id_location)
    {
        $this->_id_location = $id_location;
    }
    public function setName_location($name_location)
    {
        $this->_name_location = $name_location;
    }
    public function setCity_location($city_location)
    {
        $this->_city_location = $city_location;
    }
    public function setPostal_code_location($postal_code_location)
    {
        $this->_postal_code_location = $postal_code_location;
    }


    //GETTERS
    public function getId_location()
    {
        return $this->_id_location;
    }
    public function getName_location()
    {
        return $this->_name_location;
    }
    public function getCity_location()
    {
        return $this->_city_location;
    }
    public function getPostal_code_location()
    {
        return $this->_postal_code_location;
    }
    
}

?>