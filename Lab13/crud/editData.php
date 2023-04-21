<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="style.css">
  <title>Edit Success.</title>
</head>
<body>
<div class="container">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name= $_POST['name'];
$email = $_POST['email'];
$roll_no = $_POST['roll_no'];
$id = $_POST['id'];

$sql = "UPDATE Student SET name='$name', email='$email', roll_no='$roll_no' WHERE id=$id";
$result = mysqli_query($conn, $sql);
if ($result) {echo "Record updated successfully";}   
else {echo "Error updating record: " . $conn->error;}
?>
<br>
<a href="/crud"><button style="background-color:#4267B2">Back To Student List</button></a>
</div>
</body>
</html>