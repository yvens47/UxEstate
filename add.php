<?php 

session_start();
require 'init.php';

if(!$user->isLoggedIn()){
    
    header('location: login-page.php');
}
?>

<?php require'templates/header.php' ?>
    <div  id='add'>

        <div class='container-fluid'>
            <div class="row">
                <div class="col-md-6">
                    <h1>Lorem ipsum dolor sit amet </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Commodi, mollitia ipsa ducimuprovident fugit nihil nam quibusdam, 
                    cupiditate.ti, quod?</p>
                    <hr>
                    <h2>Lorem ipsum dolor sit amet </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Commodi, </p>


                </div>
                <div class="col-md-6">
                    <?php require ABSPATH."templates/add_listing.php" ?>
                
                </div>

            </div>

    </div>





<?php require'templates/footer.php' ?>