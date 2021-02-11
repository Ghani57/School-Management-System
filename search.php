<!DOCTYPE html>
<html>
<head>
	<title>Search For a student</title>
		<meta charset="utf-8">
	<meta name="veiwport" content="device-width", initial-scale=1, shrink-to-fit="no">
	<link  href = "bootstrap/css/bootstrap.min.css"  rel="stylesheet">
	<!-- External CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.14.0-web/css/all.min.css">
	<!--External JavaScript File-->
	<script src="bootstrap/js/javascript.js"></script>
	<style type="text/css">
		body{
			background-color: green;
		}
	</style>
</head>
<body>
	<div id="main-content">
    <h2 style="color: white">Search for a student</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label style="color: white">Registration # </label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Search" />
    </form>
<?php
if (isset($_POST['showbtn'])) {
$conn = mysqli_connect("localhost","root","","school") or die("Can't connect with database");

$stu_reg =$_POST['sid'];

$sql="SELECT *FROM student where Registration_Nbr = '{$stu_reg}'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <table class="table">
    	<tr style="color: white">
    	<th>Registration Number</th>
    	<th>Class Roll Number</th>
    	<th>Name</th>
    	<th>Gender</th>
    	<th>Class</th>
    	<th>Address</th>
    	<th>Father's/Guardian's Phone Number</th>
    	<th>Father's/Guardian's Occupation</th>
    	<th>Photo</th></tr>
<tr style="color: white"><td><?php
		echo $row['Registration_Nbr'];
		echo "<br>";?></td>
		<td><?php
		echo $row['Class_Number'];
		echo "<br>";?></td>
		<td><?php
		echo $row['Name'];
		echo "<br>";?></td>
		<td><?php
		echo $row['Gender'];
		echo "<br>";?></td>
		<td><?php
		echo $row['Class'];
		echo "<br>";?></td>
		<td><?php
		echo $row['Address'];
		echo "<br>";?></td>
		<td><?php
		echo $row['Fathers_Phone'];
		echo "<br>";?></td>
		<td><?php
		echo $row['Fathers_Occupation'];
		echo "<br>";?></td>
		<td>
			<?php
			echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" style="width:50px; height: 50px;"/>';
			?>
		</td>
		</table>
<?php
		echo "<br>";

	} }
}
?>
</body>
</html>