<?php
	require("../requires/connection.php");
	include "../includes/includefiles.html";
	require "../requires/admin_chk.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Branch</title>
	
</head>
<?php $id = $_GET['id'];
$branches = $database->select("branch",'*',array('id'=>$id)); ?>
<body>
<?php include "../includes/adminnavbar.php"; ?>
<div class="admin-container">
<div class="well text-center">
<?php foreach($branches as $branch){ ?>
	<form class="form-horizontal" action="../admin/updatebranchdb.php" id="updatebranch" method="post">
    	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Name: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="branchname" value="<?php echo $branch['branchname']; ?>">
            </div>
        </div>
        <div class="form-group">
        <label  class="col-sm-2 control-lable">Location: </label>
        <div class="col-sm-10">
    		<textarea class="form-control" type="text" name="location"><?php echo $branch['location']; ?></textarea>
        </div>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-lable">Contact: </label>
        <div class="col-sm-10">
    		<input class="form-control" type="text" name="contact"  value="<?php echo $branch['contact']; ?>">
        </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Departments: </label>
            <div class="col-sm-10">
            	 <?php
				$deptbranch = $database->select('deptbranch',array('branch_id','dept_id'),array('branch_id'=>$id));
				$departments = $database->select('department',array('deptname','id'));
				echo "(use Ctrl key for multi selection)";
				echo "<select class='form-control' name='departments[]' multiple>" ;
				foreach ($departments as $dept)
				{
					foreach($deptbranch as $db){
						if($db['dept_id'] == $dept['id']){
							echo "<option value='".$dept['id']."' selected>".$dept['deptname']."</option>";
								
						}
						else{
							echo "<option value='".$dept['id']."'>".$dept['deptname']."</option>";
								
						}
					}
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