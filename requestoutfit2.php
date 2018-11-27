<?php
$user = $_POST['user'];
$outfitname = $_POST['outfitname'];
$season = $_POST['season'];
$time = $_POST['time'];
$reason = $_POST['reason'];
$comments = $_POST['comments'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "latmyodb";

//create connection
$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
} else {
  $sql = "INSERT INTO requestoutfit (user, outfitname, season, time, reason, comments) values('$user','$outfitname','$season','$time','$reason','$comments')";
  $conn->query($sql);
  $conn->close();
}

?>
