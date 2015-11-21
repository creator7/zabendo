<?php
 if(isset($_SESSION["error"]) || isset($_GET['token'])){ ?>
		  	<div class="text-center alert alert-danger alert-block fade in">
        	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php   if(isset($_SESSION["error"])){ ?>
        <?php if($_SESSION["error"]=='yes'){ ?>
  			<p>You don't have permission to view this page!!</p>
            <?php } else{ ?>
            <p>Username or Password invalid!!</p>
				<?php }
	  			$_SESSION['error']= NULL;
				}	if(isset($_GET['token'])){ ?>
            	<p>You are now signed out!</p>
              <?php } ?>
               </div>
	  		<?php }?>
         <?php if(isset($_SESSION["status"])){ ?>
			 <div class="text-center alert alert-success alert-block fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
		 <?php if($_SESSION['status'] == 'loggedin'){ ?>
  			<p>Signed in Successfully </p>
            <?php } else{ ?>
				<p>Signed up Successfully </p>
            <?php } ?>
             </div>
		 <?php
		 $_SESSION['status']= NULL; 
		} ?>