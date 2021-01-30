<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shwethein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $id=$_REQUEST['id'];
// Escape user inputs for security
$book_title=$_REQUEST['book_title'];
	 	$author=$_REQUEST['author'];
	 	$prize=$_REQUEST['prize'];
	 	$category=$_REQUEST['category'];
	 	$p_date=$_REQUEST['p_date'];
		$book="UPDATE book SET book_title='$book_title', author='$author', prize='$prize', category='$category',  p_date='$p_date' WHERE id='$id' ";
if(mysqli_query($link, $book)){
    header('Location: code.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>