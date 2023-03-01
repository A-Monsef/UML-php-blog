<?php
include "../database.php";
use Models\User;
try{
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["email"]) && !empty($_POST["nom"]) && !empty($_POST["password"])) {
            $nom = $_POST["nom"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            try{
                User::create("user", ["nom", "email", "password"], [$nom, $email, $password], $conn);
                header("Location: connection");

                }catch(PDOException $e){
                $_SESSION['error_msg'] = "Erreur lors de l'envoi";
                echo "Erreur : " . $e->getMessage();
                }

        } else {
            $_SESSION['error_msg'] = "Complete empty fields !";
            include '../views/inscription.php';
        }
    }
    else{
        if(isset($_SESSION['error_msg'])) {
            unset($_SESSION['error_msg']);
        }
        include '../views/inscription.php';
    }
}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}

?>