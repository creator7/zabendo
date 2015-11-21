<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>add department</title>
<?php
	include "../includes/includefiles.html";
	require "../requires/admin_chk.php";
?>
</head>

<body>
	<?php include "../includes/adminnavbar.php"; ?>
	<div class="admin-container">
	<div class="well text-center">
        <form class="form-horizontal" action="../admin/deptdb.php" id="adddept" method="post">
        <div class="form-group">
            <label class="col-sm-2 control-lable">Name: </label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="deptname" placeholder="Enter Name.." required>
            </div>
        </div>
        <div class="form-group">
        <label  class="col-sm-2 control-lable">Content: </label>
        <div class="col-sm-10">
    		<textarea class="form-control" rows="10" type="text" name="content" placeholder="Enter Page content.." required></textarea>
        </div>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-lable">Contact: </label>
        <div class="col-sm-10">
    		<input class="form-control" type="text" name="contact" placeholder="Enter Contact.." required>
        </div>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-lable">Contact Person: </label>
        <div class="col-sm-10">
    		<input class="form-control" type="text" name="contact_person" placeholder="Enter Contact Person.." required>
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
        	<input class="btn btn-primary" type="submit" name="submitbtn" value="Add Department"/>
        </div>
        </div>
        </form>
        </div>
       </div>
    
</body>
</html>