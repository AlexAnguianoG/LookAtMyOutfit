<?php
$user = $_POST['user'];
$outfitname = $_POST['outfitname'];
$season = $_POST['season'];
$time = $_POST['time'];
$reason = $_POST['reason'];
$comments = $_POST['comments'];
if (!empty($user) || !empty($outfitname) || !empty($season) || !empty($time) || !empty($reason) || !empty($comments)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "latmyodb";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
        } else {
         $SELECT = "SELECT outfitname From requestoutfit Where outfitname = ? Limit 1";
         $INSERT = "INSERT Into requestoutfit (user, outfitname, season, time, reason, comments) values(?, ?, ?, ?, ?, ?)";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $outfitname);
         $stmt->execute();
         $stmt->bind_result($outfitname);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssssss", $user, $outfitname, $season, $time, $reason, $comments);
          $stmt->execute();
          echo "Your request has been sent to one of our fashion experts sucessfully";
         } else {
          die();
         }
         $stmt->close();
         $conn->close();
        }
    } else {
     echo "All field are required";
     die();
    }
    ?>
