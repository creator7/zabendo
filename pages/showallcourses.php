<?php 
require "../requires/connection.php";
include "../includes/includefiles.html";
require "../requires/admin_chk.php";
$courses = $database->select("course",array('id','coursename','cr_hr'),'');
?>
<head>
</head>
<body>
<?php include "../includes/adminnavbar.php"; ?>
<div class="admin-container">
<?php include "../includes/adminalert.php" ?>
        <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <th>Course Name </th>
        <th>Credit Hours</th>
        <th>Edit</th>
        <th>Remove</th>
        <?php foreach($courses as $course){ ?>
            <tr>
                <td><?php echo $course['coursename']; ?></td>
                <td><?php echo $course['cr_hr']; ?></td>
                <td><a class="btn btn-primary btn-small" href="updatecourse.php?id=<?php echo $course['id'];?>">Edit</a></td>
                <td><a  class="btn btn-primary btn-small" href="../admin/remcourse.php?id=<?php echo $course['id'];?>">Remove</a></td>
            </tr>
       <?php } ?>
    </table>
    <div class="text-center">
    	<a href="addcourse.php" class="btn btn-primary">Add course</a>
    </div>
	</div>
</div>
</body>