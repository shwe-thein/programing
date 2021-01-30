
<?php 
session_start();
$id=$_REQUEST['myid'];
$link=mysqli_connect("localhost", "root", "", "shwethein");

$book="SELECT * FROM book WHERE id='$id' ";
if($result=mysqli_query($link, $book)){
	$row=mysqli_fetch_array($result);
}


// check button is submit
 if(isset($_POST['submit'])){
 	if(empty($_FILES['photo']['name'])){
	 	$book_title=$_REQUEST['book_title'];
	 	$author=$_REQUEST['author'];
	 	$prize=$_REQUEST['prize'];
	 	$category=$_REQUEST['category'];
	 	$p_date=$_REQUEST['p_date'];
		$book="UPDATE book SET book_title='$book_title', author='$author', prize='$prize', category='$category',  p_date='$p_date' WHERE id='$id' ";
		
 	}
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

		<form method="POST" action="edit-one.php?id=<?php echo $id=$_REQUEST['myid']; ?>" enctype="multipart/form-data">


			<input type="hidden" name="id" value="<?php echo $id=$_REQUEST['myid']; ?>">
			<!-- studen tid -->
			<div class="form-group">
				<label>Book_Title</label>
			<input type="text" name="book_title" class="form-control" value="<?php echo $row['book_title']; ?>">
			</div>
			<div class="form-group">
				<label>Author</label>
			<input type="text" name="author" class="form-control" value="<?php echo $row['author']; ?>">
			</div>
			<div class="form-group">
				<label>Prize</label>
			<input type="text" name="prize" class="form-control" value="<?php echo $row['prize']; ?>">
			</div>
			<div class="form-group">
				<label>Category</label>
			<input type="text" name="category" class="form-control" value="<?php echo $row['category']; ?>">
			</div>
			<div class="form-group">
				<label>P_Date</label>
			<input type="text" name="p_date" class="form-control" value="<?php echo $row['p_date']; ?>">
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
