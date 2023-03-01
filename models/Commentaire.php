<?php
namespace Models;

class Commentaire extends Model{
    public $id;
    public $content;
    public $date;
    public $nom;
    public $id_admin;
    public $id_user;
    public $id_aticle;

    function __construct($id, $content, $date, $nom, $id_admin, $id_user, $id_article){
        $this->id=$id;
        $this->content=$content;
        $this->date=$date;
        $this->nom=$nom;
        $this->id_admin=$id_admin;
        $this->id_user=$id_user;
        $this->$id_article=$id_article;
    }

}
?>