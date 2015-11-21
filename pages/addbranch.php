<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>add branch</title>
<?php
	include "../includes/includefiles.html";
	require "../requires/admin_chk.php";
	require "../requires/connection.php";
?>
</head>

<body>
	<?php include "../includes/adminnavbar.php"; ?>
	<div class="admin-container">
	<div class="well text-center">
        <form class="form-horizontal" action="../admin/branchdb.php" id="addbranch" method="post">
        <div class="form-group">
            <label class="col-sm-2 control-lable">Name: </label>
            <div class="col-sm-10">
            	<input class="form-control" type="text" name="branchname" required placeholder="Enter Name.."/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Contact: </label>
            <div class="col-sm-10">
            	<input class="form-control" type="text" name="contact" required placeholder="Enter Contact.."/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Location: </label>
            <div class="col-sm-10">
            	<textarea class="form-control" type="text" name="location" required placeholder="Enter Location.."></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Departments: </label>
            <div class="col-sm-10">
            	 <?php
				$data = $database->select('department',array('deptname','id'));
				echo "(use Ctrl key for multi selection)";
				echo "<select class='form-control' name='departments[]' multiple>" ;
				foreach ($data as $row)
				{
					echo "<option value='".$row['id']."'>".$row['deptname']."</option>";
				}
				echo "</select>";
				?>
            </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
            <input class="btn btn-primary" type="submit" name="submitbtn" value="Add Branch"/>
        </div>
        </div>
        </form>
        </div>
       </div>
    
</body>
</html>