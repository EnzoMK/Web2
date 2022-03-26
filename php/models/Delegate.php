<?php

//class pour récupérer toute les données de la classe user

class Delegate  extends Model
{
    private $_id_delegate;
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
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
                $this->$method($value);
        }
    }

    //SETTERS
    public function setId_delegate($id_delegate)
    {
        $this->_id_delegate = $id_delegate;
    }
    public function setId_user($id_user)
    {
        $this->_id_user = $id_user;
    }
    

    //GETTERS
    public function getId_delegate()
    {
        return $this->_id_delegate;
    }
    public function getId_user()
    {
        return $this->_id_user;
    }
    
}

?>