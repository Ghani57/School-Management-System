<?php
//In this file, the very first thing you have to do is to receive data from the first file and that data shall be can be received through the following variables as:
$stu_reg =$_POST['rgnbr'];
$stu_classnbr =$_POST['classnbr'];
$stu_name =$_POST['sname']; 
$stu_gender =$_POST['gender'];
$stu_class =$_POST['class']; 
$stu_address =$_POST['address'];
$phone =$_POST['mblnbr'];
$occup =$_POST['occupation'];
$file =$_POST['image'];
if(isset($_POST["submit"]))
{
	$file =addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
}
//Now we need to make a connection with the database as:
$conn = mysqli_connect("localhost","root","","school") or die("Can't connect with the database");

$query = "INSERT INTO student (Registration_Nbr,Class_Number,Name,Gender,Class,Address,Fathers_Phone,Fathers_Occupation,Image) VALUES ('{$stu_reg}', '{$stu_classnbr}' , '{$stu_name}', '{$stu_gender}' ,'{$stu_class}', '{$stu_address}', '{$phone}', '{$occup}', '{$file}')";

$result = mysqli_query($conn, $query);


header("Location: http://localhost/Project/fetchdata.php");

mysqli_close($conn);
?>
