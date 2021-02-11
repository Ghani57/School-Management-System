<?php 
$stu_regnbr = $_POST['regnbr']; 
$stu_classnbr = $_POST['rollnbr']; 
$stu_name = $_POST['sname']; 
$stu_gender = $_POST['gender']; $file =$_POST['image'];
$stu_class = $_POST['class']; 
$stu_address = $_POST['Address']; 
$phone = $_POST['phone']; 
$occupation = $_POST['occup']; 
$file =$_POST['image'];
if(isset($_POST["submit"]))
{
	$file =addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
}
$conn = mysqli_connect("localhost","root","","school");
 
$sql = "UPDATE student SET Class_Number = '{$stu_classnbr}', Name = '{$stu_name}', Gender = '{$stu_gender}', Class = '{$stu_class}', Address = '{$stu_address}', Fathers_Phone = '{$phone}', Fathers_Occupation = '{$occupation}', Image =  '{$file}' WHERE Registration_Nbr = '{$stu_regnbr}'"; 

$result = mysqli_query($conn , $sql) or die("Query Unsuccessfull!!"); 
 
header("Location: http://localhost/Project/fetchdata.php"); 
 
mysqli_close($conn); 
 
?> 