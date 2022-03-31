<?php

class Wishlist
{

    private $id_offer;
    private $id_student;
    
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
        $this->id_offer = $id_offer;
    }
    public function setId_student($id_student)
    {
        $this->id_student = $id_student;
    }
    

    //GETTERS
    public function getId_offer()
    {
        return $this->id_offer;
    }
    public function getId_student()
    {
        return $this->id_student;
    }

}
?>