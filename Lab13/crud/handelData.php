<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Students</title>
</head>
<body>
<div class="container">
  <table border="1px">
  <tr>
    <th>Roll No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Joined On</th>
    <th>Remove me</th>
    <th>Edit me</th>
  </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$name = $_POST["name"]; 
$roll_no = $_POST["roll_no"]; 
$email = $_POST["email"]; 

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "INSERT INTO Student (name, email, roll_no)
VALUES ('$name', '$email', '$roll_no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  $query = "SELECT * FROM Student";
  $result = mysqli_query($conn, $query);
  while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['roll_no']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['joined_on']."</td>";
    echo '<td><button style="background-color:red;"><a href="/crud/deleteData.php?id='.$row['id'].'">Delete</a></button></td>';
    echo '<td><button><a href="/crud/updateData.php?id='.$row['id'].'">Update</a></button></td>';
    echo "</tr>";
  }
} 

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  </table>
  <a href="/crud"><button style="background-color:#4267B2">Back To homepage</button></a>
</div>

</body>
</html>