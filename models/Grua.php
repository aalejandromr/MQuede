<?php

class Grua{
  public $grua_name;
  public $grua_time;

  public function __construct($grua_name)
  {
    $this->grua_name = $grua_name;
    $time = date("Y-j-m G:i:s");
    $this->grua_time = $time;
  }

  public function columns()
  {
    $query = "Select * from gruas";
    //$query = "select * from talleresGruas
    $result = $_SESSION['conexion']->query($query);
    return $result;
  }

  public function all()
  {
    $query = "Select * from gruas";
    //$query = "select * from talleresGruas ORDER BY nombre ASC";
    $result = $_SESSION['conexion']->query($query);
    while($row = $result->fetch_array())
    {
      $gruas[] = $row;
    }
    return $gruas;
  }

  public function find($id)
  {
    $i = $id;
    $query = "Select * from gruas where id = '" . $i . "'";
    $result = $_SESSION['conexion']->query($query);
    while($row = $result->fetch_array())
    {
      $gruas[] = $row;
    }
    return $gruas;
  }


}