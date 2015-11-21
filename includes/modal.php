 
 <?php 
	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
 <!-- signupModal -->
          <div class="modal fade" id="signupModal">
                            	<div class="modal-dialog text-center">
                                
                                	<div class="modal-content col-12">
                                    
                                    	<div class="modal-header img-rounded">
                                        	<button class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">ZABENDO UNIVERSITY</h4>
                                        </div><!-- end modal-header-->
                                        
                                        <div class="modal-body">
                                        	<h4>Enter Your Details</h4>
                                            <hr>
                                            <form class="form-horizontal" data-toggle="validator" action="../pages/SignUp.php" method="post" id="signupform">
                                            	<div class="form-group">
                                            		<label class="col-lg-3 control-label" for="inputFullName">Full Name</label>
                                                    <div class="col-lg-9">
                                                    	<input class="form-control" id="inputFullName" type="text" name="myFullname" placeholder="Enter Name" maxlength="25" required>
                                                    </div>         
                                                </div>
                                                
                                                <div class="form-group">
                                            		<label class="col-lg-3 control-label" for="inputUserName">User Name</label>
                                                    <div class="col-lg-9">
                                                    	<input class="form-control" id="username" name="myUsername" type="text" placeholder="Select Username" maxlength="25" required>
                                                        <div id='username_error_box'></div>
                                                    </div>         
                                                </div>
                                                
                                                <div class="form-group">
                                                <span class="help-block"><small>(minimum of 6 characters)</small></span>
                                            		<label class="col-lg-3 control-label" for="inputPassword">Password</label>
                                                    <div class="col-lg-9">
                                                    	<input class="form-control" data-minlength="6" id="inputPassword" type="password" name="mypassword"  placeholder="Enter Password" required>
                                                    </div>      
                                                </div>
                                                <div class="form-group">
                                            		<label class="col-lg-3 control-label" for="cnfrmPassword">Confirm</label>
                                                    <div class="col-lg-9">
                                                    	<input class="form-control" name="passconfirm" type="password" placeholder="Confirm Password" data-match="#inputPassword"  required>
                                                    </div>         
                                                </div>
                                                
                                             	
                                                <div class="form-group">
                                            		<label class="col-lg-3 control-label" for="inputEmail">Email</label>
                                                    <div class="col-lg-9">
                                                    	<input class="form-control" id="inputEmail" type="email" name="myEmail" placeholder="Enter Email Address" required>
                                                        <hr>
                                                        
                                                        <button class="btn btn-success pull-right" id="signUp">SignUp</button>
                                                    </div>         
                                                </div>
                                               
                                                
                                            </form>
                                            
                                        </div><!-- end modal-body-->
                                        
                                        <div class="modal-footer">
                                        	<small class="text-muted pull-right">Copyrights ZABENDO All Rights Reserved</small>
                                        </div>
                                        
                                    </div><!-- end modal-content-->
                                </div><!-- end modal-dialog-->
                            	
</div><!-- end SIGNUP Modal-->

       <!-- emailModal -->
          <div class="modal fade" id="EmailModal">
                            	<div class="modal-dialog">
                                
                                	<div class="modal-content">
                                    
                                    	<div class="modal-header img-rounded">
                                        	<button class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">ZABENDO University</h4>
                                        </div><!-- end modal-header-->
                                        
                                        <div class="modal-body">
                                        	<h4>Type in your details and message</h4>
                                            <hr>
                                            <form class="form-horizontal" method="post" action="sendemail.php">
                                            	<div class="form-group">
                                            		<label class="col-lg-2 control-label" for="inputName">Name</label>
                                                    <div class="col-lg-10">
                                                    	<input class="form-control" id="inputName" type="text" name="emailName" placeholder="Enter Your Name" required>
                                                    </div>         
                                                </div>
                                                
                                                <div class="form-group">
                                            		<label class="col-lg-2 control-label" for="inputEmail">Email</label>
                                                    <div class="col-lg-10">
                                                    	<input class="form-control" id="inputEmail" type="email" name="emailAddress" placeholder="Enter Email" required>
                                                    </div>         
                                                </div>
                                                
                                                <div class="form-group">
                                            		<label class="col-lg-2 control-label" for="inputMessage">Message</label>
                                                    <div class="col-lg-10">
                                                    	<textarea class="form-control" id="inputMessage" name="emailMessage" rows="3" placeholder="Your Message"></textarea>           
                                                        <button class="btn btn-success pull-right" type="submit">Send</button>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </form>
                                        </div><!-- end modal-body-->
                                        
                                        <div class="modal-footer">
                                        	<small class="text-muted pull-right">Copyrights ZABENDO All Rights Reserved</small>
                                        </div>
                                        
                                    </div><!-- end modal-content-->
                                </div><!-- end modal-dialog-->
                            	
           </div><!-- end emailModal-->
           
            <!-- loginModal -->
          <div class="modal fade text-center" id="loginModal">
                            	<div class="modal-dialog text-center">
                                
                                	<div class="modal-content col-6 myLogin">
                                    
                                    	<div class="modal-header img-rounded">
                                        	<button class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">ZABENDO UNIVERSITY</h4>
                                        </div><!-- end modal-header-->
                                        
                                        <div class="modal-body">
                                        	<h4>Enter Login Details</h4>
                                            <hr>
                                            
                                            <form class="form-horizontal" method="post" action="../pages/index.php">
                                            	<div class="form-group">
                                            		<label class="col-lg-2 control-label" for="userName"><span class="glyphicon glyphicon-user"></span></label>
                                                    <div class="col-lg-10">
                                                    	<input class="form-control" id="userName" name="myusername" type="text" placeholder="Enter Username" required>
                                                    </div>         
                                                </div>
                                                
                                                <div class="form-group">
                                            		<label class="col-lg-2 control-label" for="inputPassword"><span class="glyphicon glyphicon-lock"></span></label>
                                                    <div class="col-lg-10">
                                                    	<input class="form-control" id="inputPassword" name="mypassword" type="password" placeholder="Enter Password" required>
                                               <input type="checkbox" name="remember" class="text-center" align="right"><small>Remember me</small>
                                                	<button class="btn btn-success" type="submit">Login</button>
                                              </div>         
                                                </div>
                                            </form>
                                            
                                        </div><!-- end modal-body-->
                                       
                                        
                                    </div><!-- end modal-content-->
                                </div><!-- end modal-dialog-->
                            	
</div><!-- end loginModal-->
</div><!-- end loginMain-->
