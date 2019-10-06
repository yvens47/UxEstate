<?php



session_start();
require_once '../init.php';
if(!$user->isLoggedIn()){  
     
    header('location: /UxEstate/login-page.php');
}



require ABSPATH. 'Account/templates/header.php' ?>

<div id='account'>

    <div class="container-fluid">
      <?php 
        if(isset($_SESSION['new_property_add_id'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
         <?php  unset($_SESSION['new_property_add_id']);  endif ?>

         <!-- end  of a success  alert -->
        <div class="row">
            <div class="col-md-3">

              

                  <div class='panel'>
                    <div class="panel-heading">My Account</div>
                    <div class="panel-body">
                        <ul class="list-group list-group-flush">
                             <li class="list-group-item"> <a href='?id=1'/> <i class='material-icons icons'>person_pin</i>Profile</a></li>

                            <li class="list-group-item"> <a href='?id=2'/> <i class='material-icons icons'>settings_applications</i>Settings</a></li>
                            
                             <li class="list-group-item"> <a href='?id=3'/> <i class='material-icons icons'>edit</i>Edit Account</a></li>

                            
                      </ul>
                    
                    </div>
                                   
                  </div>


                   <div class='panel mt-3'>
                    <div class="panel-heading">Properties</div>
                    <div class="panel-body">
                        <ul class="list-group list-group-flush">
                             <li class="list-group-item"> <a href='?id=4'/> <i class='material-icons icons'>menu</i>Litings</a></li>

                            <li class="list-group-item"> <a href=''/> <i class='material-icons icons'>settings_applications</i>Settings</a></li>
                            
                             <li class="list-group-item"> <a href=''/> <i class='material-icons icons'>edit</i>Edit Account</a></li>

                            
                      </ul>
                    
                    </div>
                                   
                  </div>

            </div>
            

            <div class="col-md-9">

                <!--- dashboard info-->
                  <div class="dash-info">                           
                  
                  </div>
                <!--- dashboard info ends here-->
             
           
                <!-- display  all listings -->

                 <?php if(!isset($_GET['id'])) : ?>
                  <div class="listings">
                      <h2>Your Listings</h2>
                     
                      <div class="listing">
                         <?php  $property = new Property(array(), $database); 
                         $user_id = intval($_SESSION['logged_user_data']['id']);     
                         
                        $sql = " select * from property where agent_id = '$user_id' ; --"; 
                         ?>

                         <?php if( !empty($property->view($sql))): ?>
                         <p class='lead'>  <?php 
                         
                         $num = count($property->view($sql));
                         $string = "you currently have %d listings";
                         
                         echo sprintf($string , $num) ?>  </p>

                         <table class='table table-striped'>
                           <thead class="thead-light">
                               <tr>
                                <th scope="col">Address</th>
                                <th scope="col">Listing Price</th>
                                <th scope="col">Posted Date</th>
                                <th scope="col">images</th>
                                <th scope="col">Action</th>

                                
                              </tr>
                             </thead>

                          <?php  foreach($property->view($sql) as $key=> $value) :?>
                            <tr>
                                <td><?php  echo "<strong>".$value['street']."</strong>". " ".$value['city'] .", " .$value['state']." ". $value['postal_code'];?></td> 
                                <td><?php  echo  "$".number_format($value['listing_price']);?></td> 
                                <td><?php  echo   $value['listing_date']?></td> 
                                
                                <?php 
                               
                                $property_id =$value['id'];
                               
                                $sql_image = "select image_name from property_image where property_id='$property_id' " ;?>
                                <!-- print image or button to upload images-->
                                <td><?php  echo  empty( $property->view($sql_image))?" <a  data-id = '$property_id' data-toggle='modal' data-target='#exampleModal' class='btn btn-info upload-prop-images' href='Upload'><i class='material-icons icons'>backup</i>Add Photos </a>":  count( $property->view($sql_image))?></td> 
                                <td>
                                <a href='edit.php?id=<?php echo $property_id ?>' class='btn btn-info'>Edit</a>
                                <a  onclik=''href='delete.php?id=<?php echo $property_id ?>' class='btn btn-danger deletePropertyBtn'>Delete</a></td> 

                            </tr>



                          <?php  endforeach;?>


                         </table>
                         <?php else: ?>
                         
                            <h2 class='h2'>You have no Listings</h2>
                            <hr/>
                            <p> To start with your listing please <a href='http://localhost:8080/UxEstate/add.php' class='link'>click here </a></p>

                        <? endif;?>
                         
                      
                      </div>
                     

                                             
                      
                  
                  </div>
                  <?php endif;?>
                <!-- display  all listings -->
                        
            </div>
        
        </div>
    </div>
  

</div>

<!--- Upload Images  Modal --->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <form action="upload.php" method="post" enctype="multipart/form-data">
            
              <input name='id' type="hidden" class="form-control pid" id="exampleInputEmail1" value=''>
            
            <div class="form-group">
              <label for="exampleInputPassword1">Upload File</label>
              <input multiple  name='files[]' type="file" class="form-control inputfile">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>

          
          
        
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!--- Upload Images  Modal ends here --->


<script src="ajax.js"></script>
<?php require ABSPATH. 'templates/footer.php' ?>
