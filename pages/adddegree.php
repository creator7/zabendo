<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Degree</title>
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
        <form class="form-horizontal" action="../admin/degreedb.php" id="adddegree" method="post">
        <div class="form-group">
            <label class="col-sm-2 control-lable">Name: </label>
            <div class="col-sm-10">
            	<input class="form-control" type="text" name="degreename" placeholder="Name..." required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Department: </label>
            <div class="col-sm-10">
            	 <?php
				$data = $database->select('department',array('deptname','id'));
				echo "<select class='form-control' name='departments'>" ;
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
            <input class="btn btn-primary" type="submit" name="submitbtn" value="Add Degree"/>
        </div>
        </div>
        </form>
        </div>
       </div>
    
</body>
</html>