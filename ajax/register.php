<?php

 define('__CONFIG__', true);

 // Require the config
 require_once "../inc/config.php";

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   header('Content-Type: application/json');

   $return = [];

   $return['redirect'] = '/dashboard.php';
   $return['name'] = "Stan Chen";

   echo json_encode($return, JSON_PRETTY_PRINT); exit;
 } else {
   exit('test');
 }
?>
