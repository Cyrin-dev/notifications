<?php
$con=mysqli_connect("cyrindev.com","cyrin45d_handley","R}F}F622TrIP","cyrin45d_demo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$name = $_POST['outageName'];
$text = $_POST['textAlert'];
$phpDate = date("Y-m-d H:i:s");
$sql = "INSERT INTO Events (name, text, date)
VALUES ('$name', '$text', '$phpDate')";



if (mysqli_query($con, $sql)) {
    $sqlID = "SELECT * FROM `Events` WHERE `date` = '$phpDate'";
    $queryID=mysqli_query($con,$sqlID);
    $rowID=mysqli_fetch_array($queryID);
    $redirect = $rowID['id'];
    header('Location: newEventDetails.php?id='.$redirect.'');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>


