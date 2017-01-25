<?php
require_once("models/Grua.php");

class GruaController{

  public function dashboard(){
    $grua = new Grua();
    require_once("views/Grua/dashboard.php");
  }


}