<?php
session_start();


//if(isset($_SERVER['REQUEST']) && $_SERVER['REQUEST'] == 'POST'){

    // proccess Login 
    print_r($_POST);

    $username = $_POST['username'] ;   

    $password = $_POST['password'];

    //clean user name and passwrod
    $user->login($username, $password);


    // was login a success    
    if($user->$isLoginSuccess) 
    // send to account
        header('Location : ./Account/index.php');
    else
    // redirect back to login page
     header('Location : ./login-page.php');


    
//}