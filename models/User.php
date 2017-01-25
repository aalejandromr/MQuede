<?php

Class User
{
  
  public $user_name;
  public $user_password;

  public function __construct($user_name, $user_password){
      $this->user_name = $user_name;
      $this->user_password = $user_password;
  }

}