<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shwethein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "DELETE FROM personal WHERE id=44";
if($result = mysqli_query($link, $sql)){
    echo "Delete is successfully!";
    }
// Close connection
mysqli_close($link);
?>