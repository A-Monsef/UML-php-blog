<?php
include "../database.php";
use Models\Articles;
try{    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["title"]) && !empty($_POST["image"]) && !empty($_POST["description"])) {
            $image = $_POST["image"];
            $title = $_POST["title"];
            $description = $_POST["description"];
            $autor = $_POST["autor"];
            $date_publication = date("Y-m-d");
            $id_admin = 1;
            Articles::create("articles", ["image", "title", "description", "autor", "date_publication", "id_admin"], [$image, $title, $description,  $autor, $date_publication, $id_admin], $conn);
            header("Location: home");

        }else {
            $_SESSION['error_msg'] = "Complete empty fields !";
            include "../views/addArticle.php";
            
        }
    } 
    else{
         if(isset($_SESSION["error_msg"])){
                unset($_SESSION["error_msg"]);
            }
            include "../views/addArticle.php";
    }
}catch(PDOException $e){
    echo "Error : " . $e->getMessage();
 }
