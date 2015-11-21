
<?php 
	require "../requires/connection.php";
?>

<?php 
if(isset($_SESSION['username'])){
	$branches = $database->select("branch",array('id','branchname'),'');
	 ?>
	<div class="well text-center" id="header-well">
	<div class="container">
    <ul class="nav nav-tabs">
      <li class="navbar-brand">Branches</li>
	<?php  foreach($branches as $branch){
	 $deptsbranch = $database->select("deptbranch",array('dept_id'),array('branch_id'=> $branch['id'])); ?>
      <li class="dropdown">
        <a class="dropdown-toggle btn btn-info" data-toggle="dropdown" href="#"><?php echo $branch['branchname'] ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
      <?php  foreach($deptsbranch as $deptbranch){
	 	$departments = $database->select("department",array('id','deptname'),array('id' => $deptbranch['dept_id'] ));
		foreach($departments as $department){ ?>
          <li><a href="../pages/department.php?id=<?php echo $department['id'];?>"><?php echo $department['deptname'] ?></a></li>
          <li class="divider"></li>
          <?php }
	  }?>
        
        </ul>
 	 </li>
     <?php 	}
	 if(isset($_SESSION['admin'])){
		 if($_SESSION['admin']){ ?>
    	<ul class="pull-right">
    	<li><a href="../pages/admin.php" class="btn btn-primary" target="_blank">Admin</a></li>
    	</ul>
    <?php }
	 }?>
	</ul>
                  
 </div>
 </div>
 <?php }
  ?>
<div class="navbar navbar-inverse" <?php if(isset($_SESSION['username'])) { echo 'data-spy = "affix" data-offset-top = "100"'; }?> id="mynavbar">
  	 	<!-- container to center the stuff in navbar-->
        <div class="container">
        	<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
            	<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        	<a class="navbar-brand" href="../pages/home.php"><img src="../images/logo.png" alt="myLogo"></a>
        	<div class="nav-collapse collapse navbar-responsive-collapse">
            	<ul class="nav navbar-nav">
                
                	<?php if(isset($_SESSION['username'])):?><li class="active"><a href="../pages/home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li style="margin-left:140px;">
                    <form class="navbar-form">
                        	<input type="text" class="form-control" placeholder="Search Our Site" id="searchInput"/>
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>          
              		</form>
                    </li>
                    <?php endif;?>
                    
                </ul><!--end nav-->
                <ul class="nav navbar-nav pull-right">
                	<?php if(!isset($_SESSION['username'])):?>
                		<li>
                        	<a href="#loginModal" role="button" id="login" data-toggle="modal">Login</a>
                        </li>
                        <li>
                        	<a href="#signupModal" role="button" id="signup" data-toggle="modal">SignUp</a>
                        </li>
                    <?php endif;?>
                        <li>
                        	<a href="#EmailModal" role="button" id="Email" data-toggle="modal"><span class="glyphicon glyphicon-envelope"> Email Us</a>
                        </li>
                        <?php if(isset($_SESSION['username'])): ?>
								
									<li class="dropdown">
                    				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><b><?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?></b><strong class="caret"></strong></a>
                            		<ul class="dropdown-menu">
                            		<li>
                            		<a href="#"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Update Profile</a>
                            		</li>
                                
                              	    <li>
                            			<a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;Settings</a>
                            		</li>
                                
                                	<li>
                            			<a href="#"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;Balance and Dues</a>
                            		</li>
                                
                              	    <li class="divider"></li>
                                	<li>
                            			<a href="../pages/signout.php"><span class="glyphicon glyphicon-off"></span>&nbsp;Sign Out</a>
                            		</li>
                            
                            		</ul>
                    			</li>
                       	<?php endif; ?>	   
                        
                
                	</ul>
                
            </div><!--end navCollapse -->
        </div><!-- end container-->
   </div><!-- end navbar-->
   <?php include "modal.php" ?>
 