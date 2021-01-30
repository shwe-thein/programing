<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shwethein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id=$_GET["myid"];
// Attempt create table query execution
$book = "DELETE FROM book WHERE id=$id";
if(mysqli_query($link, $book)){
     header("location:code.php");
} else{
    echo "ERROR: Could not able to execute $s$book. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<a href="code.php">Show</a>
<a href="book-form.php.php">Back</a>