<?php
//Received values definition
$user = $_POST['user'];
$outfitname = $_POST['outfitname'];
$season = $_POST['season'];
$time = $_POST['time'];
$reason = $_POST['reason'];
$comments = $_POST['comments'];
// Databse settings
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "latmyodb";
//Connection to databse
$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
} else {
  //Values insertion to database with respective tables
  $sql = "INSERT INTO requestoutfit (user, outfitname, season, time, reason, comments) values('$user','$outfitname','$season','$time','$reason','$comments')";
  //Validation on screen
  echo "<img style='width:500px;margin-top:50px;margin-bottom:50px;' src='images/LookatmyOutfitLarge.png'><br><h2><font color='#E27C7C' style='font-size:30px'>Your request has been sent to one of our fashion experts sucessfully, you will get a notification with our recommendation in some minutes.<br><br><a href='requestoutfit.html'>Return</a></font></h2>";
  $conn->query($sql);
  //Close connection to databse
  $conn->close();
}
?>
