<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/limit.css">
    <title>Output Data</title>
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shwethein");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM book";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Book Title</th>";
                echo "<th>Author</th>";
                echo "<th>Prize</th>";
                 echo "<th>Category</th>";
                  echo "<th>P_Date</th>";
                  echo "<th>Image</th>";
                  echo "<th>Action</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['book_title'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['prize'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['p_date'] . "</td>";
                echo "<td>"."<img width='80px' height='80px' src='upload/".$row['image']."' >"."</td>";
                echo "<td>" ."<a href='delete.php?myid=$row[id]'>Delete</a><a href='edit.php?myid=$row[id]'>Update</a>". "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>