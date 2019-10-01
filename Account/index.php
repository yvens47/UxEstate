<?php

session_start();

 require_once '../init.php';

require ABSPATH. 'templates/header.php' ?>
<div id='account'>
   
   <?php  echo "<pre/>";
    print_r($_SESSION);
    
    
    ?>

</div>

<?php require ABSPATH. 'templates/footer.php' ?>