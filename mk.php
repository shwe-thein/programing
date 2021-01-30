<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shwethein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE IF NOT EXISTS student_regisiter(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    no VARCHAR(30) NOT NULL,
    name VARCHAR(30) NOT NULL,
    rank VARCHAR(50) NOT NULL,
    appointment VARCHAR(100) NOT NULL,
    departments VARCHAR(50) NOT NULL,
    class VARCHAR (50) NOT NULL
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>