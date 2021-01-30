<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shwethein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$no = mysqli_real_escape_string($link, $_REQUEST['no']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$rank = mysqli_real_escape_string($link, $_REQUEST['rank']);
$appointment = mysqli_real_escape_string($link, $_REQUEST['appointment']);
$departments = mysqli_real_escape_string($link, $_REQUEST['departments']);
 $class = mysqli_real_escape_string($link, $_REQUEST['class']);
// Attempt insert query execution
$sql = "INSERT INTO student_regisiter(no, name,rank,appointment,departments,class) VALUES
      ('$no', '$name', '$rank','$appointment','$departments','$class')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>