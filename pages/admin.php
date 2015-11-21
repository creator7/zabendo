
<head><?php include ("../admin/includefiles.html");
	require "../requires/admin_chk.php"; ?> </head>
<body>
	<?php include "../includes/adminnavbar.php"; ?>
   <div class="container">
      <div class="row">
      
    <div class="left-container col-6">
  <div class="panel img-rounded pull">
    	<div class="panel-heading text-center img-circle">
        	<h3>Branch Menu</h3>
        </div>
     <a href="addbranch.php" class="btn btn-default btn-block">Add Branch</a> 
     <a href="showallbranches.php" class="btn btn-default btn-block">Show all branches</a>
    </div>
   </div><!-- end left-container-->
   <div class="right-container col-6">
  <div class="panel img-rounded pull">
    	<div class="panel-heading text-center img-circle">
        	<h3>Departments Menu</h3>
        </div>
     <a href="adddept.php" class="btn btn-default btn-block">Add Department</a> 
     <a href="../pages/showalldept.php" class="btn btn-default btn-block">Show all departments</a>
    </div>
   </div>
  </div>
  <div class="row">
      
    <div class="left-container col-6">
  <div class="panel img-rounded pull">
    	<div class="panel-heading text-center img-circle">
        	<h3>Course Menu</h3>
        </div>
     <a href="addcourse.php" class="btn btn-default btn-block">Add Course</a> 
     <a href="showallcourses.php" class="btn btn-default btn-block">Show all courses</a>
    </div>
   </div><!-- end left-container-->
   <div class="right-container col-6">
  <div class="panel img-rounded pull">
    	<div class="panel-heading text-center img-circle">
        	<h3>Degree Menu</h3>
        </div>
     <a href="adddegree.php" class="btn btn-default btn-block">Add Degree</a> 
     <a href="showalldegrees.php" class="btn btn-default btn-block">Show all degrees</a>
    </div>
   </div>
  </div>
  </div>
    </body>
</html>

