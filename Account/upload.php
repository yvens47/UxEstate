<?php 



session_start();
require_once '../init.php';


if(isset($_SERVER['REQUEST_METHOD']) && 
        $_SERVER['REQUEST_METHOD'] == 'POST' &&   isset($_FILES)){

            // process

          $property_id = intval( $_POST['id']);

         // $files = $_POST['files'];

       // echo "<pre/>";
       // print_r($_FILES['files']);
        $image = new Image($_FILES['files'], $database);

       

            //save file name to databas
          // $property = new Property(array(), $database);
           $image->insert_to_db($property_id);


        
           



        
 }