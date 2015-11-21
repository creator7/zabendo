<?php
 if(isset($_SESSION['token'])){ if($_SESSION['token'] == 'updated' || $_SESSION['token']=='removed' || $_SESSION['token']=='added' ){ ?>
     	<div class="alert alert-success alert-block fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  			<p class="text-center"><?php if($_SESSION['token']=='updated'){ ?><strong>Updated Successfully! </strong>
			<?php } elseif($_SESSION['token']=='removed') { ?> <strong>Removed Successfully! </strong>
            <?php } else { ?><strong>Added Successfully! </strong>
            <?php } ?>
			</p>
		</div>
        <?php }
		$_SESSION['token']=NULL; 
		}?>