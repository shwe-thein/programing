<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shwethein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$book_title = mysqli_real_escape_string($link, $_REQUEST['book_title']);
$author = mysqli_real_escape_string($link, $_REQUEST['author']);
$prize = mysqli_real_escape_string($link, $_REQUEST['prize']);
$category = mysqli_real_escape_string($link, $_REQUEST['category']);
 $p_date = mysqli_real_escape_string($link, $_REQUEST['p_date']);
 $image = mysqli_real_escape_string($link, $_REQUEST['photo']);
// Attempt insert query execution
$sql = "INSERT INTO book (book_title, author,prize,category,p_date,image) VALUES
      ('$book_title', '$author', '$prize','$category','$p_date','$image')";
if(mysqli_query($link, $sql)){
   header('Location: code.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>