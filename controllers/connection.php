<?php
include "../database.php";

try{
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["email"]) && !empty($_POST["password"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM user  WHERE email = ? AND password = ? ";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$email, $password]);
            $rows = $stmt->rowCount();
            if($rows > 0) {
                $res = $stmt->fetchAll();
                $_SESSION['id'] = $res[0]['id'];
                $_SESSION['nom'] = $res[0]['nom'];
            }
            header("Location: home");

        }else {
        echo "please complete all fields";
        }
    } else {
        include "../views/connection.php";
    } 
    }catch(PDOException $e){
    echo "Error : " . $e->getMessage();
 }
