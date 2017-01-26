<?php
  include 'models/Conexion.php';
  if (isset($_REQUEST['controller']) && isset($_REQUEST['action'])) {
    $controller = $_REQUEST['controller'];
    $action     = $_REQUEST['action'];
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