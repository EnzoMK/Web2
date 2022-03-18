<?php

//class pour récupérer toute les données de la classe user

class User 
{
    private $_id_user;
    private $_first_name;
    private $_last_name;
    private $_mail;
    private $_username;
    private $_password;
    private $_id_location;

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
    public function setId_user($id_user)
    {
        $this->_id_user = $id_user;
    }
    public function setFirst_name($first_name)
    {
        $this->_first_name = $first_name;
    }
    public function setLast_name($last_name)
    {
        $this->_last_name = $last_name;
    }
    public function setMail($mail)
    {
        $this->_mail = $mail;
    }
    public function setUsername($username)
    {
        $this->_username = $username;
    }
    public function setPassword($password)
    {
        $this->_password = $password;
    }
    public function setId_location($id_location)
    {
        $this->_id_location = $id_location;
    }


    //GETTERS
    public function getId_user()
    {
        return $this->_id_user;
    }
    public function getFirst_name()
    {
        return $this->_first_name;
    }
    public function getLast_name()
    {
        return $this->_last_name;
    }
    public function getMail()
    {
        return $this->_mail;
    }
    public function getUsername()
    {
        return $this->_username;
    }
    public function getPassword()
    {
        return $this->_password;
    }
    public function getId_location()
    {
        return $this->_id_location;
    }
}

?>