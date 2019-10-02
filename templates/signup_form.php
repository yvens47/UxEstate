<form method='post' action='signup_handler.php'>
                       

                         <div class="form-group">
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                            <input required name='email' type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email">
                        </div>

                         <div class="form-group">
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                            <input name='password' type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                        </div>

                        <div class="form-group">
                                <label for="exampleFormControlSelect1">I am a</label> 
                                <select name='type'class="form-control" id="exampleFormControlSelect1">
                                <option value='1'>Seller</option>
                                <option value='0'>Buyer</option>                                
                                </select>
                        </div>
                       
                         <div class="form-group">
                         <button class="btn btn-info">Signup </button>
                            
                        </div>
                        </form>