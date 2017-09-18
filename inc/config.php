<?php

  if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
  }

  if(!isset($_SESSION)) {
    session_start();
  }

  date_default_timezone_set("Asia/Taipei");

  error_reporting(-1);
  ini_set('display_errors', 'On');

  include_once "classes/DB.php";
  include_once "classes/Filter.php";
  include_once "classes/Page.php";
  include_once "classes/User.php";
  include_once "functions.php";

  $con = DB::getConnection();

?>
