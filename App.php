<?php require'templates/header.php' ?>

<div id="wrapper">

    <div id="map">

    </div>

    <!-- filter form--->
    <div class='filter-form'>
        <div class="container">
            <div class="row">

                <div class="col-md-7 pr-0 pl-0">
                        <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Los Angeles" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-info" type="button" id="button-addon2"><i class="material-icons icons">search</i></button>
                                </div>
                        </div>
                
                </div>

                <div class="col-md-2 pr-0 pl-0">
                        <div class="input-group mb-3">
                                <select name="" id="" class='form-control'>
                                    <option value="">Home</option>
                                    <option value="">Condos</option>
                                    <option value="">Townhomes</option>
                                    <option value="">House</option>
                                    <option value="">Multi-family</option>
                                </select>
                                <div class="input-group-append">
                                  
                                    <!-- <button class="btn btn-outline-info" type="button" id="button-addon2">Button</button> -->
                                </div>
                        </div>
                
                </div>
                <div class="col-md-1 pr-0 pl-0">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">                   

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Price
                            </button>
                            <div class="dropdown-menu min-max  dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <!--- min and max Price-->
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Min</span>
                                        </div>
                                        <input type="number" aria-label="First name" class="form-control">
                                       
                                    </div>

                                    <div class="input-group mt-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Max</span>
                                        </div>
                                        <input type="number" aria-label="First name" class="form-control">
                                       
                                    </div>
                                    <!--- min and max Price-->
                            </div>
                        </div>
                        </div>

                </div>

                <div class="col-md-2 pr-0 pl-0">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">                   

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Beds / Bath
                            </button>
                            <div class="dropdown-menu min-max  dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <!--- min and max Price-->
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Bed</span>
                                        </div>
                                        <input type="number" aria-label="First name" class="form-control">
                                       
                                    </div>

                                    <div class="input-group mt-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Bath</span>
                                        </div>
                                        <input type="number" aria-label="First name" class="form-control">
                                       
                                    </div>
                                    <!--- min and max Price-->
                            </div>
                        </div>
                        </div>

                </div>

                

                
            </div>
        </div>
    </div>
    <!-- filter form--->
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-7 ">
                    <div class='container'>
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <div class="show" id="viewing">
                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Request a showing</a>
                                    <a href="" class="btn btn-default">


                                    
                                    </a>

                                </div>
                                <!-- carousel --->

                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                            <img src="https://images1.apartments.com/i2/mpiquXuyW3e1Rph6py25eAAwRtZf4y-3xJCzzFESZeM/111/the-village-of-olde-hickory-lancaster-pa-primary-photo.jpg" class="d-block w-100" alt="...">
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img src="https://static.trulia-cdn.com/pictures/thumbs_6/zillowstatic/ISjrkhqog3i9co0000000000.webp" class="d-block w-100" alt="...">
                                                            </div>
                                                            <div class="carousel-item">
                                                            <img src="https://static.trulia-cdn.com/pictures/thumbs_6/zillowstatic/ISbli58icv9cco0000000000.webp" class="d-block w-100" alt="...">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                 </div>

                                <!-- carousel ends here -->
                                   
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class='address-view'> 230 W Walnut st <span>Lanacaster, PA 17603</span></p> 
                                            </div>
                                            <div class="col-md-6">
                                                <p class='price-view'> $123,000</p> 
                                                <p><span class="sqt"> Sq Ft 23,456</span> <span class="beds"> 4 Bed</span></p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                         <div class="row">

                            <!--- tabs--->
                            <div class='col-md-12'>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="material-icons icons">subject</i>Home</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="material-icons icons">view_module</i>Profile</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> <i class="material-icons icons">phone</i>Contact</a>
                                    </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ducimus officia culpa, at natus voluptatibus fugiat doloribus eum qui, est velit facilis nisi ullam autem sunt quasi voluptates numquam dolorum.</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ducimus officia culpa, at natus voluptatibus fugiat doloribus eum qui, est velit facilis nisi ullam autem sunt quasi voluptates numquam dolorum.</p>

                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...profile</div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="agent">
                                                        <img class='img-fluid' src="https://better-digital-artist.com/wp-content/uploads/2019/04/picture_nicolas_delille.png"/>

                                                        <p class="agent_name">
                                                            Hi, I am Craig Masterson
                                                        </p>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-8">

                                                    <div class="contact">
                                                        <form>
                                                                <div class="form-group">
                                                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                                                </div>
                                                                <div class="form-group">
                                                                    <!-- <label for="exampleFormControlSelect1">Example select</label> -->
                                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    </select>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <!-- <label for="exampleFormControlTextarea1">Example textarea</label> -->
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                </div>
                                                                </form>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                            </div>

                            <!-- Tab --->

                    

                    </div>
                   </div>

                </div>

                <!-- listings leftbar-->
                <div class="col-lg-5">
                    <div class="show container" id="viewing">
                        <div class="row">
                            <div class="col-md-4">1234 results</div>
                             <div class="col-md-4">Sort by  
                                 <select name="" id="" class="sort form-control col-sm-8">
                                     <option value="">Price</option>
                                      <option value="">Location</option>

                                 </select>
                             </div>

                             <div class="col-md-4">
                                 <select name="" id="" class="sort form-control ">
                                     <option value="">High to low</option>
                                      <option value="">Low to High</option>
                                      
                                 </select>
                             </div>

                        </div>

                    </div>


                    <div class='container list'>
                        <div class='row'>
                            <div class="listing-image col-md-5">
                                <img  class='img-fluid' src='https://images1.apartments.com/i2/mpiquXuyW3e1Rph6py25eAAwRtZf4y-3xJCzzFESZeM/111/the-village-of-olde-hickory-lancaster-pa-primary-photo.jpg' alt=''/>
                                
                            </div>
                            <div class="col-md-7">
                                <h1 class="listing-title">440 sw Main st, Manheim PA 17545</h1>
                                <p class="listing-bed"><span>Bed Rooms 4</span> <span> Bath 1</span></p>
                                <p class="listing-sqt">Sq Ft. <span>23,456</span></p>
                                <p class="listing-built"><span>Years Built</span> <span> 1995</span></p>
                                <p class="listing-on"><span> 17 </span> <span> days on market</span></p>
                                

                            </div>

                        </div>
                        
                    </div>

                    <div class='container list'>
                        <div class='row'>
                            <div class="listing-image col-md-5">
                                <img  class='img-fluid' src='https://images.unsplash.com/photo-1464316325666-63beaf639dbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80' alt=''/>
                                
                            </div>
                            <div class="col-md-7">
                                <h1 class="listing-title">44 sw lititsz st, Manheim PA 17694</h1>
                                <p class="listing-bed"><span>Bed Rooms 4</span> <span> Bath 1</span></p>
                                <p class="listing-sqt">Sq Ft. <span>23,456</span></p>
                                <p class="listing-built"><span>Years Built</span> <span> 1995</span></p>
                                <p class="listing-on"><span> 17 </span> <span> days on market</span></p>
                                

                            </div>

                        </div>
                        
                    </div>


                    <div class='container list'>
                        <div class='row'>
                            <div class="listing-image col-md-5">
                                <img  class='img-fluid' src='https://images.unsplash.com/photo-1472224371017-08207f84aaae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80' alt=''/>
                                
                            </div>
                            <div class="col-md-7">
                                <h1 class="listing-title">44 sw York st, Manheim PA 17694</h1>
                                <p class="listing-bed"><span>Bed Rooms 4</span> <span> Bath 1</span></p>
                                <p class="listing-sqt">Sq Ft. <span>23,456</span></p>
                                <p class="listing-built"><span>Years Built</span> <span> 1995</span></p>
                                <p class="listing-on"><span> 17 </span> <span> days on market</span></p>
                                

                            </div>

                        </div>
                        
                    </div>

                    <div class='container list'>
                        <div class='row'>
                            <div class="listing-image col-md-5">
                                <img  class='img-fluid' src='https://images.unsplash.com/photo-1464316325666-63beaf639dbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80' alt=''/>
                                
                            </div>
                            <div class="col-md-7">
                                <h1 class="listing-title">44 sw lititsz st, Manheim PA 17694</h1>
                                <p class="listing-bed"><span>Bed Rooms 4</span> <span> Bath 1</span></p>
                                <p class="listing-sqt">Sq Ft. <span>23,456</span></p>
                                <p class="listing-built"><span>Years Built</span> <span> 1995</span></p>
                                <p class="listing-on"><span> 17 </span> <span> days on market</span></p>
                                

                            </div>

                        </div>
                        
                    </div>




                    
                    

                </div>

                <!-- listings leftbar-->
                
            </div>

    </div>


</div>


<!-- Modal -->
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
        <form>
        <div class="form-group">
            <!-- <label for="formGroupExampleInput">Full name</label> -->
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full name">
        </div>
        <div class="form-group">
            <!-- <label for="formGroupExampleInput">phone</label> -->
            <input type="phone" class="form-control" id="formGroupExampleInput" placeholder="phone">
        </div>

        <div class="form-group">
            <!-- <label for="formGroupExampleInput2">Date</label> -->
            <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="choose date">
        </div>

        <div class="form-group">
            <!-- <label for="formGroupExampleInput2">Date</label> -->
            <textarea type="date" class="form-control"  rows='4' id="formGroupExampleInput2" placeholder=""> </textarea>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php require'templates/footer.php' ?>