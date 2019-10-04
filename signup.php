<?php 


session_start();

require_once 'init.php';

if($user->isLoggedIn()){  
     
    header('location: ./Account/index.php');
}
?>

<?php require'templates/header.php' ?>
    <div class='container' id='register_wwrap'>
         <div class='row'>

            <div class="col-md-4">
                    <div class="sign-form-wrapper">

                    <h2 class="sign-header text-center" > Sign up</h2>
                    <hr/>
                    <p class='text-center' >Become a member today</p>
                         <!---add signup form --->
                        <?php require ABSPATH."templates/signup_form.php" ?>
                        <!---add signup form ends here --->
                    </div>
                    
            </div>
            <div class="col-md-4">
                <!-- social login wrapper -->
                <div class="social-login-wrapper">
                
                </div>   
                 <!-- social login wrapper -->         
            </div>
           
        </div>

    </div>



<?php require'templates/footer.php' ?>