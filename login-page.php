<?php 


session_start();

require_once 'init.php';

if($user->isLoggedIn()){   
    header('location: ./Account/index.php');
}
?>

<?php require'templates/header.php' ?>

    <div class="container" id='login-page'>
    <?php  if(isset($_SESSION["registered_success"])): ?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> 
            <?php echo $_SESSION["registered_success"]; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>

    <?php endif; ?>
  
        <div class="row">
            <div class="col-md-4">
             <!-- login form -->

             <?php require ABSPATH.'templates/login_form.php' ?>
                <?php echo $_SESSION['login_failed'] ?>
                
            
            </div>
            <div class="col-md-4">
            
            </div>
         
        </div>
    </div>
 



<?php require'templates/footer.php' ?>