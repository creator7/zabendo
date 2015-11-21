<?php 
require "../requires/connection.php";
include "../includes/includefiles.html";
require "../requires/admin_chk.php";
$branches = $database->select("branch",array('id','branchname','location','contact'),'');
?>
<head>
</head>
<body>
<?php include "../includes/adminnavbar.php"; ?>
<div class="admin-container">
<?php include "../includes/adminalert.php" ?>
        <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <th>Branch Name </th>
        <th>Location</th>
        <th>Contact</th>
        <th>Edit</th>
        <th>Remove</th>
        <?php foreach($branches as $branch){ ?>
            <tr>
                <td><?php echo $branch['branchname']; ?></td>
                <td><?php echo $branch['location']; ?></td>
                <td><?php echo $branch['contact']; ?></td>
                <td><a class="btn btn-primary btn-small" href="updatebranch.php?id=<?php echo $branch['id'];?>">Edit</a></td>
                <td><a  class="btn btn-primary btn-small" href="../admin/rembranch.php?id=<?php echo $branch['id'];?>">Remove</a></td>
            </tr>
       <?php } ?>
    </table>
    <div class="text-center">
    	<a href="addbranch.php" class="btn btn-primary">Add Branch</a>
    </div>
	</div>
</div>
</body>
