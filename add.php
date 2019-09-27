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
                    <form method='post' action=''>
                        <div class="form-group">
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                            <input name='agent_name' type="text" class="form-control" id="exampleFormControlInput1" placeholder="full name">
                        </div>

                        <div class="form-group">
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                            <input  name='property_address'type="address" class="form-control" id="exampleFormControlInput1" placeholder="property address">
                        </div>

                         <div class="form-group">
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                            <input name='property_price' type="number" class="form-control" id="exampleFormControlInput1" placeholder="property price">
                        </div>
                        <div class="form-group">
                                <!-- <label for="exampleFormControlSelect1">Home Type</label> -->
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>House</option>
                                <option>Condo</option>
                                <option>Townhome</option>
                                <option>Multi family</option>
                                <option>other</option>
                                </select>
                            </div>
                           <div class="form-group">
                                <div class='container'>

                                    <div class="row">
                                        <div class="col-md-6 pl-0">
                                           <input name='bedrooms' type="number" class="form-control" id="exampleFormControlInput1" placeholder="How many bedrooms">

                                        </div>
                                        <div class="col-md-6 pr-0">
                                          <input name='baths' type="number" class="form-control" id="exampleFormControlInput1" placeholder="How many baths">

                                        </div>
                                    </div>
                                </div>
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                        </div>

                        <div class="form-group">
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                            <input name='property_price' type="file" class="form-control" id="exampleFormControlInput1" placeholder="property price">
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <!-- <label for="exampleFormControlTextarea1">Example textarea</label> -->
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                         <div class="form-group">
                         <button class="btn btn-info">Add Property</button>
                            
                        </div>
                        </form>
                
                </div>

            </div>

    </div>





<?php require'templates/footer.php' ?>