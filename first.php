<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "root", "", "shwethein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$class = mysqli_real_escape_string($link, $_REQUEST['class']);
 $farther_name = mysqli_real_escape_string($link, $_REQUEST['farther_name']);
 $adress = mysqli_real_escape_string($link, $_REQUEST['adress']);
// Attempt insert query execution
$sql = "INSERT INTO student (name, age, class,farther_name,adress) VALUES
      ('$name', '$age', '$class','$farther_name','$adress')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>