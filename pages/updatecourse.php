<?php
	require("../requires/connection.php");
	include "../includes/includefiles.html";
	require "../requires/admin_chk.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Course</title>
	
</head>
<?php $id = $_GET['id'];
$courses = $database->select("course",'*',array('id'=>$id)); ?>
<body>
<?php include "../includes/adminnavbar.php"; ?>
<div class="admin-container">
<div class="well text-center">
<?php foreach($courses as $course){ ?>
	<form action="../admin/updatecoursedb.php" id="updatecourse" class="form-horizontal" method="post">
    	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Name: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="coursename" value="<?php echo $course['coursename']; ?>">
            </div>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-lable">Credit hours: </label>
        <div class="col-sm-10">
    		<input class="form-control" type="number" name="cr_hr" value="<?php echo $course['cr_hr']; ?>">
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Degrees: </label>
            <div class="col-sm-10">
            	 <?php
				 echo "(use Ctrl key for multi selection)";
				$data = $database->select('degree',array('degreename','id'));
				echo "<select class='form-control' name='degrees' multiple>" ;
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
        	<input class="btn btn-primary" type="submit" name="submitbtn" value="update"/>
        </div>
        </div>
    </form>
    <?php } ?>
    </div>
   </div>
</body>
</html>