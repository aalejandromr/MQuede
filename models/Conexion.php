<?php
  session_start();
  static $servername = "localhost";
  static $username = "root";
  static $password = "root";
  static $db = "mquede";
  $conn = new mysqli($servername,$username,$password, $db);
  $_SESSION['conexion'] = $conn;