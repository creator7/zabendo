<?php
	require("../requires/connection.php");
	include "../includes/includefiles.html";
	require "../requires/admin_chk.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Degree</title>
	
</head>
<?php $id = $_GET['id'];
$degrees = $database->select("degree",'*',array('id'=>$id)); ?>
<body>
<?php include "../includes/adminnavbar.php"; ?>
<div class="admin-container">
<div class="well text-center">
<?php foreach($degrees as $degree){ ?>
	<form action="../admin/updatedegreedb.php" id="updatedegree" class="form-horizontal" method="post">
    	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Name: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="degreename" value="<?php echo $degree['degreename']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Department: </label>
            <div class="col-sm-10">
            	 <?php
				$departments = $database->select('department',array('deptname','id'));
				echo "<select class='form-control' name='departments'>" ;
				foreach ($departments as $dept)
				{
					if($dept['id'] == $degree['dept_id'])
						echo "<option value='".$dept['id']."' selected>".$dept['deptname']."</option>";
					else
						echo "<option value='".$dept['id']."'>".$dept['deptname']."</option>";
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