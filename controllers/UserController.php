<?php
require_once("models/User.php");
class UserController{

  public function index(){
    require_once("views/User/index.php");
  }

  public function login(){
    $user = new User($_POST['user_name'], md5($_POST['password']));
    #$_SESSION['conexion'];
    $consulta = "select * from users where user_name = '" . $user->user_name . "' and user_password = '" . $user->user_password . "'";
    if($sentencia = $_SESSION['conexion']->prepare($consulta))
    {
      $sentencia->execute();
      $sentencia->store_result();
      if(($sentencia->num_rows))
      {
        $_SESSION['login'] = TRUE;
        $sentencia->close();
        header("Location: index.php?controller=Grua&action=dashboard"); 
      }
      else
      {
        $_SESSION['login'] = FALSE;
      }
    }
  }


}