<?php

  if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
  }

  date_default_timezone_set("Asia/Taipei");

  error_reporting(-1);
  ini_set('display_errors', 'On');

  include_once "classes/DB.php";
  include_once "classes/Filter.php";

  $con = DB::getConnection();

?>
