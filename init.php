<?php


   if(!defined('ABSPATH'))
        define("ABSPATH", dirname(__FILE__)."/");


    // include files
   require  ABSPATH ."Classes/user.php";
   require  ABSPATH ."Classes/database.php";
   require  ABSPATH ."config/config.php";
   require  ABSPATH . "Classes/property.php";
   require  ABSPATH . "Classes/image.php";
  

   
   $database  = new Database(HOST, USER, PASSWORD, DATABASE);
 

  
   $user = new User($database->db_connect());





?>