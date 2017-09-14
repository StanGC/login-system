<?php

  if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
  }

  date_default_timezone_set("Asia/Taipei");

  include_once "classes/DB.php";
  $con = DB::getConnection();

?>
