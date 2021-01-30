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
$no=$_REQUEST['no'];
	 	$name=$_REQUEST['name'];
	 	$rank=$_REQUEST['rank'];
	 	$appointment=$_REQUEST['appointment'];
	 	$departments=$_REQUEST['departments'];
	 	$class=$_REQUEST['class'];
		$book="UPDATE student_regisiter SET no='$no', name='$name', rank='$rank', appointment='$appointment',  departments='$departments', class='$class' WHERE id='$id'";
if(mysqli_query($link, $book)){
    echo "Edit is successfully.";
} else{
    echo "ERROR: Could not able to execute $book. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>