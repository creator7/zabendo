<?php
	require("../requires/session.php");
	 ?>
    <head><?php include ("../includes/includefiles.html"); ?> </head>
<body>

	<?php
	$_SESSION['url'] = $_SERVER['REQUEST_URI'];
	 include("../includes/navbar.php"); ?>
    <div class="container">
    <?php include "../includes/alert.php";
		$dept = $database->select("department",array('id','deptname','contact','contact_person','content'),array('id'=>$_GET['id']));
		
		 ?>
	<!-- Your Code Goes Here. Remember to remove this comment once you've started, you don't need it :) -->
      <?php foreach($dept as $d){ ?>
      	<div class="panel img-rounded pull" id="deptpanel">
          <div class="panel-heading text-center text-info" id="deptname">
          	<h3><b><?php echo $d['deptname']; ?> </b></h3>
          </div>
          <div class="well text-center" id="deptcontent">
            <p> <?php echo $d['content']; ?> </p>
            <div id="contactperson">
                <div class="label label-info">Contact Person</div>
                <h5><?php echo  $d['contact_person']; ?></h5>
                <div class="label label-info">Contact</div>
                <h5><?php echo  $d['contact']; ?></h5>
            </div>
      </div>
    </div>
      
      <?php } ?>
  	<!-- end container -->
    </div>
    </body>
   <?php include("../includes/footer.php");?>
</html>

