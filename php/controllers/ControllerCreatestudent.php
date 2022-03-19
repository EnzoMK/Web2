<?php

class ControllerCreatestudent
{
    private $_student;
    private $_createStudent;

    public function __construct($url)
    {
        /* if (isset($url) && count($url)>1)
             throw new Exception('Page introuvable');
         else */
        $this->users();
    }

    private function users()
    {
        $this->_student = new User();
        $this->_createStudent = new CreateStudent();
        if (isset($_POST['submit'])) {


            $this->_createStudent->ReqCreateStudent($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['username'], $_POST['motdepasse'], $_POST['villeducentre'], $_POST['centre'], $_POST['codepostal'], $_POST['promotion']);
        }
        require_once('views/viewCreationetudiant.php');
    }
}