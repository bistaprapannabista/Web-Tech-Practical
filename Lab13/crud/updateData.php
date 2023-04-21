<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="style.css">
  <title>Update Data.</title>
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
$query = "SELECT * FROM Student WHERE ID=".$id;
$result = mysqli_query($conn, $query);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row from the result set
    $row = mysqli_fetch_assoc($result);
    // Access the "name" and "email" columns from the row
    $name = $row["name"];
    $email = $row["email"];
    $roll_no = $row["roll_no"];
    echo'<form method="post" action="editData.php">';
    echo'<div class="card">';
    echo'<label for="roll_no">Roll No:</label>';
    echo'<input type="text" name="roll_no" required value="'.$roll_no.'">';
    echo'<label for="name">Name:</label>';
    echo'<input type="text" name="name" required value="'.$name.'">';
    echo'<label for="email">Email:</label>';
    echo'<input type="email" name="email" required value="'.$email.'">';
    echo'<input type="hidden" name="id" required value="'.$id.'">';
    echo'<button style="margin-top: 5px;">Update</button>';
    echo'</div>';
    echo'</form>';

} else {
    echo "No student found with ID ".$id;
}
?>
<br>
<a href="/crud"><button style="background-color:#4267B2">Back To Student List</button></a>
</div>
</body>
</html>