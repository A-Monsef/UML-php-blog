<?php 
use Models\Articles;
use Models\Commentaire;
include '../Database.php';
if(!isset($_GET['id'])) {
  header("location: home");
}

$id_article = $_GET["id"];

$article = Articles::getById('articles', $id_article, $conn);

include "../views/details.php";
?>