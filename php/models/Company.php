<?php

//class pour récupérer toute les données de la classe user

class User 
{
    private $_id_company;
    private $_name_company;
    private $_activity_area;
    private $_number_of_cesi_interns;
    private $_confidence_promotion_Pilot;


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
    public function setId_company($id_company)
    {
        $this->_id_company = $id_company;
    }
    public function setName_company($name_company)
    {
        $this->_name_company = $name_company;
    }
    public function setActivity_area($activity_area)
    {
        $this->_activity_area = $activity_area;
    }
    public function setNumber_of_cesi_interns($number_of_cesi_interns)
    {
        $this->_number_of_cesi_interns = $number_of_cesi_interns;
    }
    public function setConfidence_promotion_Pilot($confidence_promotion_Pilot)
    {
        $this->_confidence_promotion_Pilot = $confidence_promotion_Pilot;
    }


    //GETTERS
    public function getId_company()
    {
        return $this->_id_company;
    }
    public function getName_company()
    {
        return $this->_name_company;
    }
    public function getActivity_area()
    {
        return $this->_activity_area;
    }
    public function getNumber_of_cesi_interns()
    {
        return $this->_number_of_cesi_interns;
    }
    public function getConfidence_promotion_Pilot()
    {
        return $this->_confidence_promotion_Pilot;
    }
}

?>