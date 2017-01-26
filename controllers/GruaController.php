<?php
require_once("models/Grua.php");

class GruaController{

  public function dashboard(){
    $grua = new Grua();
    require_once("views/Grua/dashboard.php");
  }

  public function find()
  {
    $id = $_POST['id'];
    $grua = new Grua();
    require_once("views/Grua/find.php");
  }

  public function edit()
  {
    $id = $_POST['id'];
    $grua_name = $_POST['grua_name'];
    $grua_time = $_POST['grua_time'];
    $query = "update gruas set gruas_name = '" . $grua_name ."', gruas_time = '" . $grua_time . "' where id = '" . $id ."'";
    if($_SESSION['conexion']->query($query))
    {
      echo("Actualizado correctamente");
    }
  }

  public function delete()
  {

  }

  public function add()
  {
    require_once("views/Grua/add.php");
  }

}