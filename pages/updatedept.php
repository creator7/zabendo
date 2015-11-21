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
$department = $database->select("department",'*',array('id'=>$id)); ?>
<body>
<?php include "../includes/adminnavbar.php"; ?>
<div class="admin-container">
<div class="well text-center">
<?php foreach($department as $dept){ ?>
	<form class="form-horizontal" action="../admin/updatedeptdb.php" id="updatedept" method="post">
    	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="form-group">
            <label class="col-sm-2 control-lable">Name: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="deptname" value="<?php echo $dept['deptname']; ?>">
            </div>
        </div>
        <div class="form-group">
        <label  class="col-sm-2 control-lable">Location: </label>
        <div class="col-sm-10">
    		<textarea class="form-control" rows="10" type="text" name="content"><?php echo $dept['content']; ?></textarea>
        </div>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-lable">Contact: </label>
        <div class="col-sm-10">
    		<input class="form-control" type="text" name="contact" value="<?php echo $dept['contact']; ?>">
        </div>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-lable">Contact Person: </label>
        <div class="col-sm-10">
    		<input class="form-control" type="text" name="contact_person"  value="<?php echo $dept['contact_person']; ?>">
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