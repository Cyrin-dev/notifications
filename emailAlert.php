<?php
$con=mysqli_connect("cyrindev.com","cyrin45d_handley","R}F}F622TrIP","cyrin45d_demo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $dlArray = $_POST['dl'];
  $eventID = $_POST['eventID'];
  $emailArray= $_POST['singleEmail'];
  if(empty($dlArray))
  {
  }
  else
  {
    $c = count($dlArray);
    for($i = 0; $i < $c; $i++)
    {
     $nameDL = $dlArray[$i];
     $sql = "INSERT INTO Notified (name, eventID) VALUES ('$nameDL', '$eventID')";
      if (mysqli_query($con, $sql)) {
    } 
    else
    {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    }
  }
  
  if(empty($emailArray))
  {
  }
  else
  {
    $c1 = count($emailArray);
    for($i = 0; $i < $c1; $i++)
    {
     $nameEmail = $emailArray[$i];
     $sql = "INSERT INTO Notified (name, eventID) VALUES ('$nameEmail', '$eventID')";
      if (mysqli_query($con, $sql)) {
    } 
    else
    {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    }
  }
  echo $emailString;
  //Bunch of code to send text message via email to selected recepients
//header('Location: newEventCommunications.php');
?>