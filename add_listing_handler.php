<?php
session_start();


if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    
    require_once 'init.php';


    $street = $_POST['street'];
    $city =  $_POST['city'];
    $state =  $_POST['state'];
    $zip=  $_POST['postal'];
    $price =  $_POST['property_price'];
    $bedroom  = $_POST['bedrooms'];
    $bathrooms  = $_POST['bathrooms'];
    $type =  $_POST['type'];
    $description = $_POST['description'];

    $listing_data = array(
        'street'     => $street,
        'city'       => $city,
        'state'      => $state,
        'postal'     => $zip,
        'price'      => $price,
        'bedrooms'   => $bedroom,
        'bathrooms'  => $bathrooms,
        'type'       => $type,
        'description' => $description
        

    );

   
    // create a new prop object
    $property = new Property($listing_data, $database);

    // add prpoperty
    $property->add();


   
   
     

}
?>