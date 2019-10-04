
 <?php 

session_start();
require_once '../../init.php';
if(!$user->isLoggedIn()){  
     
    header('location: /UxEstate/login-page.php');
}



  $property = new Property(array(), $database);

  echo json_encode(  $property->view());
                      
?>
