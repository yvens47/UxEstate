<?php 

session_start();
require '../init.php';

if(!$user->isLoggedIn()){
    
    header('location: login-page.php');
}

$id = $_GET['id'];
$property = new Property(array(), $database);
$user_id = intval($_SESSION['logged_user_data']['id']);


$listing_data = null;
$sql ="select * from property where id = '$id' and agent_id='$user_id'";
if(!empty($property->view($sql))){
  

 $listing_data = ($property->view($sql)); // record of listing

}
?>

<?php require'templates/header.php' ?>
    <div  id='add'>
   

        <div class='container-fluid'>
            <div class="row">
                <div class="col-md-6">
                    <h1>Lorem ipsum dolor sit amet </h1>
                    <p>Lorem ip\[lo
                    sum dolor sit amet consectetur adipisicing elit. 
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





<?php require'../templates/footer.php' ?>