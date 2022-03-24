<?php

class ControllerCreatepilot
{
    private $_ceratePilot;


    public function __construct($url)
    {
        /* if (isset($url) && count($url)>1)
             throw new Exception('Page introuvable');
         else */
        $this->createusers();
    }

    private function createusers()
    {
        $this->_createPilot = new CreatePilot();
        if (isset($_POST['submitCreate'])) {

            $this->_createPilot->ReqCreatePilot($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['motdepasse'], $_POST['villeducentre'], $_POST['centre'], $_POST['codepostal']);
        }
        require_once('views/viewCreationpilote.php');
    }


}