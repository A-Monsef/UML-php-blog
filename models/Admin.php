<?php
namespace Models;

class Admin extends Model{
    public $id;
    public $nom;
    public $email;
    public $password;

    function __construct($id, $nom, $email, $password)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->email=$email;
        $this->password=$password;

    }
}


?>