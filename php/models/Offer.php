<?php

//class pour récupérer toute les données de la classe user

class Offer
{
    private $_id_offer;
    private $_internship_duration;
    private $_remuneration;
    private $_number_place;
    private $_start_intership_date;
    private $_end_intership_date;
    private $_publication_date;
    private $_id_company;
    private $_name_offer;
    private $_description_offer;
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
    public function setId_offer($id_offer)
    {
        $this->_id_offer = $id_offer;
    }
    public function setInternship_duration($internship_duration)
    {
        $this->_internship_duration = $internship_duration;
    }
    public function setRemuneration($remuneration)
    {
        $this->_remuneration = $remuneration;
    }
    public function setNumber_place($number_place)
    {
        $this->_number_place = $number_place;
    }
    public function setStart_intership_date($start_intership_date)
    {
        $this->_start_intership_date = $start_intership_date;
    }
    public function setEnd_intership_date($end_intership_date)
    {
        $this->_end_intership_date = $end_intership_date;
    }
    public function setPublication_date($publication_date)
    {
        $this->_publication_date = $publication_date;
    }

    public function setId_company($id_company)
    {
        $this->_id_company = $id_company;
    }

    public function setName_offer($name_offer)
    {
        $this->_name_offer = $name_offer;
    }

    public function setDescription_offer($_descritpion)
    {
        $this->_description_offer = $_descritpion;
    }

    //GETTERS
    public function getId_offer()
    {
        return $this->_id_offer;
    }

    public function getInternship_duration()
    {
        return $this->_internship_duration;
    }
    public function getRemuneration()
    {
        return $this->_remuneration;
    }
    public function getNumber_place()
    {
        return $this->_number_place;
    }
    public function getStart_intership_date()
    {
        return $this->_start_intership_date;
    }
    public function getEnd_intership_date()
    {
        return $this->_end_intership_date;
    }
    public function getPublication_date()
    {
        return $this->_publication_date;
    }

    public function getId_company()
    {
        return $this->_id_company;
    }

    public function getName_offer()
    {
        return $this->_name_offer;
    }

    public function getDescription_offer()
    {
        return $this->_description_offer;
    }
}

?>