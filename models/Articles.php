<?php
namespace Models;

     class Articles extends Model{
        public $id;
        public $title;
        public $date;
        public $image;
        public $autor;
        public $description;
        public $id_admin;

        function __construct ($id, $title, $date, $image, $autor, $description, $id_admin){
            $this->id=$id;
            $this->title=$title;
            $this->date=$date;
            $this->image=$image;
            $this->autor=$autor;
            $this->description=$description;
            $this->id_admin=$id_admin;
        }
     }
?>
