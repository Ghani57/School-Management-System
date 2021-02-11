<!DOCTYPE html>
<html>
<head>
	<title>All Students Records</title>
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
		h1{
			text-align: center;
			margin-top: 20px;
			color: green;
			text-shadow: 6px 6px 6px red;
		}
		table{
			margin-top: -280px;
			position: absolute;
		}
		table th{
			text-align: center;
		}
		table td{
			text-align: center;
			color: green;
		}
		a:hover{
			font-size: 20px;
			color: black;
			font-weight: bold;

		}
	</style>
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","","school") or die("Can't connect with the database");

$query = "SELECT *FROM student";

$result = mysqli_query($conn , $query);

                ?>

<h1>All Students Data</h1>
<table class="table table-striped table-hover table-bordered">
	<tr class="bg-success" style="color: white">
		<th>Registration Number</th>
		<th>Class Roll Number</th>
		<th>Name</th>
		<th>Gender</th>
		<th>Class</th>
		<th>Address</th>
		<th>Father's/Guardian's Phone Number</th>
		<th>Father's/Guardian's Occupation</th>
		<th>Picture</th>
		<th>Action</th>
	</tr>
<?php
if (mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_assoc($result)) {
?>
<tr><td><?php
		echo $row['Registration_Nbr'];
		echo "  ";?></td>
		<td><?php
		echo $row['Class_Number'];
		echo "  ";?></td>
		<td><?php
		echo $row['Name'];
		echo "  ";?></td>
		<td><?php
		echo $row['Gender'];
		echo "  ";?></td>
		<td><?php
		echo $row['Class'];
		echo "  ";?></td>
		<td><?php
		echo $row['Address'];
		echo "  ";?></td>
		<td><?php
		echo $row['Fathers_Phone'];
		echo "  ";?></td>
		<td><?php
		echo $row['Fathers_Occupation'];
		echo "  ";?></td>
		<td>
			<?php
			echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" style="width:50px; height: 50px;" alt="No Picture"/>';
			?>
		</td>
		<td>
			<a href="update.php?regnbr=<?php echo $row['Registration_Nbr']; ?>">Edit</a>/<a href="Delete.php?regnbr=<?php echo $row['Registration_Nbr']; ?>">Delete</a>
		</td>
	</tr>
<?php
		echo "<br>";

	} }
?>
</table>
</body>
</html>