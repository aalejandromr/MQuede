<?php
  include 'models/Conexion.php';
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'User';
    $action     = 'index';
  }
    
    require_once('controllers/' . $controller . 'Controller.php');
    switch($controller) {
      case 'User':
        $controller = new UserController();
        break;
      case 'Grua':
        $controller = new GruaController();
        break;
    }
    $controller->{ $action }();