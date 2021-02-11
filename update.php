<!DOCTYPE html>
<html>
<head>
    <title>Update Record</title>
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
        table{
            border: none;
            margin-left: 500px;
            background-color: purple;
        }
        table th{
            text-align: center;
            color: white;
        }
        h1{
         margin-left: 500px;
            margin-top: 20px;
            color: grey;
            text-shadow: 6px 6px 6px #728;
        }
    </style>
</head>
<body>

<?php
$conn = mysqli_connect("localhost","root","","school") or die("Can't connect with database");

$stu_reg =$_GET['regnbr'];

$sql="SELECT *FROM student where Registration_Nbr = '{$stu_reg}'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <h1>Update Data</h1>
    <table class="table-hover">
        
    <form class="post-form" action="updatedata.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <tr>
            <th><label>Registration Number</label></th>
            <td><input type="hidden" name="regnbr" class="form-group" value="<?php echo $row['Registration_Nbr'] ?>"></td>
            <tr>
            <th><label>Class Roll Number</label></th>
            <td><input type="Number" name="rollnbr" class="form-group" value="<?php echo $row['Class_Number'] ?>"></td>
        </div></tr>
        <tr><div class="form-group">
            <th><label>Name</label></th>
            <td><input type="text" name="sname" value="<?php echo $row['Name'] ?>"></td>
        </div></tr>
        <tr><div class="form-group">
            <th><label>Gender</label></th>
            <td><input type="text" name="gender" value="<?php echo $row['Gender']?>"></td>
        </div></tr>
        <tr><div class="form-group">
            <th><label>Class</label></th>
            <td><input type="text" name="class" value="<?php echo $row['Class']?>"></td>
        </div></tr>
        <tr><div class="form-group">
            <th><label>Address</label></th>
            <td><input type="text" name="Address" value="<?php echo $row['Address'] ?>"></td>
        </div></tr>
        <tr><div class="form-group">
            <th><label>Father's/Guardian's Phone Number</label></th>
            <td><input type="text" name="phone" value="<?php echo $row['Fathers_Phone'] ?>"></td>
        </div></tr>
        <tr><div class="form-group">
            <th><label>Father's/Guardian's Occupation</label></th>
            <td><input type="text" name="occup" value="<?php echo $row['Fathers_Occupation'] ?>"></td>
        </div></tr>
        <tr>
                <th>Choose Picture  </th>
    <td><input type="file" name="image" id="image"></td>
        </tr>
<tr><th></th><td><br></td></tr>
        <tr><th></th><td><input type="submit" name="submit" value="Update" id="insert"></td></tr>
    </form>
    </table>
    <?php
}
}
?>
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
