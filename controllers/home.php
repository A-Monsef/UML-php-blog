<?php
use Models\Articles;
include "../database.php";

$articles = Articles::getAll("articles", $conn);

include "../views/home.php";
?>