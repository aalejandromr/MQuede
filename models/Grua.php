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

  public function show()
  {
    $query = "Select * from gruas";
    $result = $_SESSION['conexion']->query($query);
    while($row = $result->fetch_array())
    {
      $gruas[] = $row;
    }
    return $gruas;
  }


}