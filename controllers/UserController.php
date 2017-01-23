<?php

require_once '../classes/User.php';
require_once '../classes/Conexion.php';

  if(isset($_POST['action'])){
    $username = $_POST['user_name'];
    $userpassword = md5($_POST['password']);
    $user = new User($username, $userpassword);

  }

if ($result = $conn->query("select * FROM usrs LIMIT 10")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    /* free result set */
    $result->close();
}