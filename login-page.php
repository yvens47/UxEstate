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

    <?php  unset($_SESSION["registered_success"]) ?>
    <?php endif; ?>
  
        <div class="row">
            <div class="col-md-4">
             <!-- login form -->
                    <div class='login-form sign-form-wrapper'>
                        <h2 class='sign-header text-center'>Log in</h2>
                            <hr/>

                    <?php require ABSPATH.'templates/login_form.php' ?>
                        <?php //echo $_SESSION['login_failed'] ?>
                    </div>
                    <p class ='text-center'> Not a member? please  <a href='/UxEstate/signup.php'>register</a></p>
                    <!-- login form ends here -->
                        
            
            </div>
            <div class="col-md-4">
            
            </div>
         
        </div>
    </div>
 



<?php require'templates/footer.php' ?>