<?php 


session_start();

require_once 'init.php';

if($user->isLoggedIn()){   
    header('location: ./Account/index.php');
}
  