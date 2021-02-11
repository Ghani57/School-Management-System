<!DOCTYPE html>
<html>
<head>
	<title>Add Student data</title>
		<meta charset="utf-8">
	<meta name="veiwport" content="device-width", initial-scale=1, shrink-to-fit="no">
	<link  href = "bootstrap/css/bootstrap.min.css"  rel="stylesheet">
	<!-- External CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.14.0-web/css/all.min.css">
	<!--External JavaScript File-->
	<script src="bootstrap/js/javascript.js"></script>
	<script src="jquery.js" type="text/javascript"></script>
	<style type="text/css">
table{
	border: 4px solid black;
	background-color: green;
	color: white;
	text-align: center;
	margin-left: 280px;
}
		}
		table th{
			color: white;
			font-size: 20px;
		}
		table th{
			padding: 10px;
		}
		table td{
			padding: 10px;
		}
		body{
			background-color: red;
		}
	</style>
</head>
<body>
	<div class="container">
<form action="insertdata.php" method="POST" enctype="multipart/form-data">

<h1 style="margin-left: 240px; color: gold">Student's Registration Form</h1>
<table>
	<div class="form-group">
<tr>
	<th>Registration Number  </th>
	<td><input type="text" name="rgnbr" form-control></td>
</tr>
<tr>
	<th>Class Roll Number</th>
	<td><input type="number" name="classnbr"></td>
</tr>
<tr>
	<th>Name </th>
	<td><input type="text" name="sname"></td>
</tr>
<tr>
	<th>Gender:  </th>
	<td><input type="radio" name="gender" value="Male" checked="">Male
		<input type="radio" name="gender" value="Female">Female<br></td>
</tr>
<tr>
	<th>Class</th>
	<td>
		<select name="class">
			<option>Play Group</option>
			<option>Nursary</option>
			<option>Prep</option>
			<option>One</option>
			<option>Two</option>
			<option>Three</option>
			<option>Four</option>
			<option>Five</option>
			<option>Six</option>
			<option>Seven</option>
			<option>Eight</option>
			<option>Nine</option>
			<option>Ten</option>
		</select>
	</td>
</tr>
<tr>
	<th>Address  </th>
	<td><textarea name="address"></textarea></td>
</tr>

<tr>
	<th>Father's/Guardian's Mobile Number:  </th>
	<td><input type="text" name="mblnbr"></td>
</tr>
<tr>
	<th>Father's/Guardian's Occupation</th>
	<td><input type="text" name="occupation"></td>
</tr>
<tr>
	<th>Choose Picture  </th>
	<td><input type="file" name="image" id="image"></td>
</tr>
<tr>
	<th> </th>
	<td>
		<input type="submit" name="submit" style="color: red; font-weight: bold; background-color: green" id="insert">

		<input type="reset" name="reset" style="color: red; font-weight: bold; background-color: green">
	</td>
</tr>
</div>
</table>
	
</form>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#insert').click(function(){
			var image_name =$('#image').val();
			if (image_name == '') {
				alert("Please select an Image!!!");
				return false;
			}
			else
			{
				var xtension =$('#image').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(xtension,['gif','png','jpg','JPEG']) == -1)
				{
					alert("invalid File Format!!!");
					$('#image').val('');
					return false;
				}
			}
		});
	});
</script>
