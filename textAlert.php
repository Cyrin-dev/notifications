<?php
$con=mysqli_connect("localhost","root","Sporting2013Champs!","cyrin");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$name = $_POST['outageName'];
$text = $_POST['textAlert'];
$phpDate = date("Y-m-d");
$sql = "INSERT INTO Events (name, text, date)
VALUES ('$name', '$text', '$phpDate')";

if (mysqli_query($con, $sql)) {
header('Location: newEventDetails.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>


