<?php

class Offer_promotion extends Model
{


    private $_name_promotion;
    private $_id_offer;

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

    public function getName_promotion()
    {
        return $this->_name_promotion;
    }

    public function setName_promotion($Name_promotion)
    {
        $this->_name_promotion = $Name_promotion;
    }


    //GETTERS

    public function getId_offer()
    {
        return $this->_id_offer;
    }

    public function setId_offer($id_offer)
    {
        $this->_id_company = $id_offer;
    }


}