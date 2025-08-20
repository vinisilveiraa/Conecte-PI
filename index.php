<?php
require_once "config.php";

// rotas
if($_GET){
   $controller = $_GET['controller'];
   $metodo = $_GET['metodo'];

   require_once BASE_DIR. "/app/controllers/$controller.php";

   $obj = new $controller();
   $obj->$metodo();
}else{
    // rota inicial
   require_once BASE_DIR."/app/controllers/HomeController.php";

   $obj = new HomeController();
   $obj->index();
}



