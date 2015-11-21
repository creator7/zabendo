<html>
<head><?php
if(!isset($_GET['r'])){
	include "../requires/chk_cookie.php";
}
include ("../includes/includefiles.html"); ?></head>
<body>

	<?php
	 session_start();
	 include("../includes/navbar.php"); ?>
	<!-- Your Code Goes Here. Remember to remove this comment once you've started, you don't need it :) -->
      <div class="container" id="main">
      
        <?php
		include("../includes/alert.php");
		include("../includes/Carousel.php");
		include("../includes/Callout.php");
		include("../includes/features.php");
		include("../includes/moreinfo.php");?>
    </div>	<!-- end container -->
    
    </body>
   <?php include("../includes/footer.php");?>
</html>