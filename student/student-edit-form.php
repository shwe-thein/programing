
<?php 
session_start();
$id=$_REQUEST['myid'];
$link=mysqli_connect("localhost", "root", "", "shwethein");

$book="SELECT * FROM student_regisiter WHERE id='$id' ";
if($result=mysqli_query($link, $book)){
	$row=mysqli_fetch_array($result);
 }
mysqli_close($link);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>NEWS Management</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		body{
			font-size: 13px;
		}
	</style>
</head>
<body>

<div class="container-fluid" style="margin-top: 50px;margin-left: 500px;">
	<div class="row">
		<div class="col-md-5">
			<div class="jumbotron">
				<h3 class="text-center">BOOK EDIT FORM</h3>
	<div class="form">

		<form method="POST" action="student-edit.php?id=<?php echo $id=$_REQUEST['myid']; ?>" enctype="multipart/form-data">


			<input type="show" name="id" value="<?php echo $id=$_REQUEST['myid']; ?>">
			<!-- studen tid -->
			<div class="form-group">
				<label>Reg.No</label>
			<input type="text" name="no" class="form-control" value="<?php echo $row['no']; ?>">
			</div>
			<div class="form-group">
				<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
			</div>
			<div class="form-group">
				<label>Rank</label>
			<input type="text" name="rank" class="form-control" value="<?php echo $row['rank']; ?>">
			</div>
			<div class="form-group">
				<label>Appointment</label>
			<input type="text" name="appointment" class="form-control" value="<?php echo $row['appointment']; ?>">
			</div>
			<div class="form-group">
				<label>Departments</label>
			<input type="text" name="departments" class="form-control" value="<?php echo $row['departments']; ?>">
			</div>
			<div class="form-group">
				<label>Class</label>
			<input type="text" name="class" class="form-control" value="<?php echo $row['class']; ?>">
			</div>
			<!-- end studen tid -->
			<!-- student name -->
			
			<input type="submit" name="submit" class="btn btn-success" value="Update">
			<!-- end student name -->
		</form>


	</div>
</div>
		</div>
		
		
	</div>
</div>



</body>
</html>
