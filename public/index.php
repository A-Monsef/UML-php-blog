<?php 
include "../routes/routes.php";
require_once "../vendor/autoload.php";
session_start();
$url = $_GET["url"] ? $_GET["url"] : "home";

if(array_key_exists($url, $routes)) {
  $controller = $routes["$url"];
  $path = "../controllers/" . $controller;
  if(file_exists($path)) {
    require_once $path;
  } else {
    require_once "../views/404.php";
  }
} else {
    require_once "../views/404.php";
}