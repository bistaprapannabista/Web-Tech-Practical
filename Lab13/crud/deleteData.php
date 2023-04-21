<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="style.css">
  <title>Delete Success.</title>
</head>
<body>
<div class="container">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
$conn = new mysqli($servername, $username, $password,$dbname);
$id  = $_GET["id"];
$element = "DELETE FROM Student WHERE ID=".$id;
if ($conn->query($element) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
?>
<br>
<a href="/crud"><button style="background-color:#4267B2">Back To Student List</button></a>
</div>
</body>
</html>