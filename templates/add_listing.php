<form method='post' action='add_listing_handler.php'>
                        <!-- <div class="form-group">
                         
                            <input name='agent_name' type="text" class="form-control" id="exampleFormControlInput1" placeholder="full name">
                        </div> -->
                        <div class="form-group">
                                <div class='container'>
                                        <div class="row">
                                                        <div class="col-md-6 pl-0">
                                                        <input name='street' type="text"  value='<?php if(!empty($listing_data)){ echo $listing_data['street']; }  ?>' class="form-control" id="exampleFormControlInput1" placeholder="street address">

                                                        </div>
                                                        <div class="col-md-6 pr-0">
                                                        <input value='<?php if(!empty($listing_data)){ echo $listing_data['city']; }  ?>' name='city' type="text" class="form-control" id="exampleFormControlInput1" placeholder="City">

                                                        </div>
                                        </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class='container'>
                                        <div class="row">
                                                        <div class="col-md-6 pl-0">
                                                        <input value='<?php if(!empty($listing_data)){ echo $listing_data['state']; }  ?>' name='state' type="text" class="form-control" id="exampleFormControlInput1" placeholder="State">

                                                        </div>
                                                        <div class="col-md-6 pr-0">
                                                        <input value='<?php if(!empty($listing_data)){ echo $listing_data['postal_code']; }  ?>' name='postal' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Zip Code">

                                                        </div>
                                        </div>
                                </div>
                            </div>



                         <div class="form-group">
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                            <input value='<?php if(!empty($listing_data)){ echo $listing_data['listing_price']; }  ?>' name='property_price' type="number" class="form-control" id="exampleFormControlInput1" placeholder="property price">
                        </div>
                        <div class="form-group">
                                <!-- <label for="exampleFormControlSelect1">Home Type</label> -->
                                <select name='type' class="form-control" id="exampleFormControlSelect1">
                                <option value='1'>House</option>
                                <option value='2'>Condo</option>
                                <option value='3'>Townhome</option>
                                <option value='4'>Multi family</option>
                                <option value='5'>Appartment</option>
                                </select>
                            </div>
                           <div class="form-group">
                                <div class='container'>

                                    <div class="row">
                                        <div class="col-md-6 pl-0">
                                           <input value='<?php if(!empty($listing_data)){ echo $listing_data['bedrrooms']; }  ?>'name='bedrooms' type="number" class="form-control" id="exampleFormControlInput1" placeholder="How many bedrooms">

                                        </div>
                                        <div class="col-md-6 pr-0">
                                          <input value='<?php if(!empty($listing_data)){ echo $listing_data['bathrooms']; }  ?>' name='bathrooms' type="number" class="form-control" id="exampleFormControlInput1" placeholder="How many baths">

                                        </div>
                                    </div>
                                </div>
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                        </div>

                        <!-- <div class="form-group">
                            <input name='property_price' type="number" class="form-control" id="exampleFormControlInput1" placeholder="property price">
                        </div> -->
                        
                        
                        
                        <div class="form-group">
                            <!-- <label for="exampleFormControlTextarea1">Example textarea</label> -->
                            <textarea  name='description' class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder='Description of the property'>
                            
                            </textarea>
                        </div>

                         <div class="form-group">
                         <button class="btn btn-info"><?php echo (isset($id)) ? "Edit" :"Add Property";  ?></button>
                            
                        </div>
                        </form>