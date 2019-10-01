<?php
session_start();


if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    
    require_once 'init.php';

    // proccess Login 
   

    $email = $_POST['email'] ;   

    $password = $_POST['password'];
    $user_data = array('email'=>$email, 'password' =>$password);
    
    

    //clean user name and passwrod
    $user->login($user_data);


    // // was login a success    
    // if($user->$isLoginSuccess) 
    // // send to account
    //     header('Location : ./Account/index.php');
    // else
    // // redirect back to login page
    //  header('Location : login-page.php');


    
}