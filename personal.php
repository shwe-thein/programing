<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shwethein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
 $barth_date = mysqli_real_escape_string($link, $_REQUEST['barth_date']);
 $adress = mysqli_real_escape_string($link, $_REQUEST['adress']);
 $image = mysqli_real_escape_string($link, $_REQUEST['photo']);
// Attempt insert query execution
$sql = "INSERT INTO personal(name, email,gender,barth_date,adress,image) VALUES
      ('$name', '$email', '$gender','$barth_date','$adress','$image')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>