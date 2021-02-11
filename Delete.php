<?php 

$conn = mysqli_connect("localhost","root","","school") or die("Can't connect with the database"); 
$stu_regnbr = $_GET['regnbr']; 

$query = "DELETE FROM student WHERE Registration_Nbr = '{$stu_regnbr}'";
$result = mysqli_query($conn, $query) or die("query unseccessful!");
header("Location: http://localhost/Project/fetchdata.php"); 
mysql_close($conn); 
?>