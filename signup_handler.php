<?php
session_start();


if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    
    require_once 'init.php';

    $error =array();

    // proccess Login 

   

    $email = $_POST['email'] ;   


    $password =  md5($_POST['password']);
    $type   = $_POST['type'];


    // validate email


    // password must be >= 8 characters


    $user_data = array('email'=>$email, 'password' =>$password,'type'=>$type);
    
    

    //clean user name and passwrod
    $user->register($user_data);


    
}else{
                    header('location: index.php');

}