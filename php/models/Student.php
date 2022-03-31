<?php

class Student extends Model
{
    private $_id_student;
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

    public function getId_student()
    {
        return $this->_id_delegate;
    }

    public function setId_student($id_delegate)
    {
        $this->_id_delegate = $id_delegate;
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