<?php 
require "../requires/connection.php";
include "../includes/includefiles.html";
require "../requires/admin_chk.php";
$degrees = $database->select("degree",array('id','degreename','dept_id'),'');
?>
<head>
</head>
<body>
<?php include "../includes/adminnavbar.php"; ?>
<div class="admin-container">
<?php include "../includes/adminalert.php" ?>
    <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <th>Degree Name </th>
        <th>Department</th>
        <th>Edit</th>
        <th>Remove</th>
        <?php foreach($degrees as $degree){
			$department = $database->select("department",array('deptname'),array('id'=>$degree['dept_id']));
			foreach($department as $dept){
			 ?>
            <tr>
                <td><?php echo $degree['degreename']; ?></td>
                <td><?php echo $dept['deptname']; ?></td>
                <td><a class="btn btn-primary btn-small" href="updatedegree.php?id=<?php echo $degree['id'];?>">Edit</a></td>
                <td><a  class="btn btn-primary btn-small" href="../admin/remdegree.php?id=<?php echo $degree['id'];?>">Remove</a></td>
            </tr>
       <?php } 
	   } ?>
    </table>
    <div class="text-center">
    	<a href="../pages/adddegree.php" class="btn btn-primary">Add Degree</a>
    </div>
	</div>
</div>
</body>