<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($path){
    case '/':
        require "app/controllers/HomeController.php";
        HomeController::index();
}