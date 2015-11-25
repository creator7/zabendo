<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Course</title>
<?php
	require("../requires/connection.php");
	include "../includes/includefiles.html";
	require "../requires/admin_chk.php";
?>
</head>

<body>
	<?php include "../includes/adminnavbar.php"; ?>
	<div class="admin-container">
	<div class="well text-center">
        <form class="form-horizontal" action="../admin/addcoursedb.php" id="addcourse" method="post">
        <div class="form-group">
            <label class="col-sm-2 control-lable">Name: </label>
            <div class="col-sm-10">
            	<input class="form-control" type="text" name="coursename" placeholder="Name..." required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Credit hours: </label>
            <div class="col-sm-10">
            	<input class="form-control" type="number" name="cr_hr" placeholder="Credit Hours..." required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Degrees: </label>
            <div class="col-sm-10">
            	 <?php
				 echo "(use Ctrl key for multi selection)";
				$data = $database->select('degree',array('degreename','id'));
				echo "<select class='form-control' name='degrees[]' multiple='multiple'>" ;
				foreach ($data as $row)
				{
					echo "<option value='".$row['id']."'>".$row['degreename']."</option>";
				}
				echo "</select>";
				?>
            </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
            <input class="btn btn-primary" type="submit" name="submitbtn" value="Add Course"/>
        </div>
        </div>
        </form>
        </div>
       </div>
    
</body>
</html>