<?php 
require "../requires/connection.php";
include "../includes/includefiles.html";
require "../requires/admin_chk.php";
$departments = $database->select("department",array('id','deptname','contact','contact_person'),'');
?>
<head>
</head>
<body>
<?php include "../includes/adminnavbar.php"; ?>
<div class="admin-container">
<?php include "../includes/adminalert.php" ?>
        <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <th>Department Name </th>
        <th>Contact</th>
        <th>Contact Person</th>
        <th>Edit</th>
        <th>Remove</th>
        <?php foreach($departments as $dept){ ?>
            <tr>
                <td><?php echo $dept['deptname']; ?></td>
                <td><?php echo $dept['contact']; ?></td>
                <td><?php echo $dept['contact_person']; ?></td>
                <td><a class="btn btn-primary btn-small" href="updatedept.php?id=<?php echo $dept['id'];?>">Edit</a></td>
                <td><a  class="btn btn-primary btn-small" href="../admin/remdept.php?id=<?php echo $dept['id'];?>">Remove</a></td>
            </tr>
       <?php } ?>
    </table>
    <div class="text-center">
    	<a href="adddept.php" class="btn btn-primary">Add Department</a>
    </div>
	</div>
</div>
</body>