<?php session_start();
$message="";
require 'db.php'; ?>

<?php
  $user_id = $_SESSION['user_id'];
  // price

  $message = $_POST['message'];
  $added = strtotime(date("Y-m-d H:i:s"));


  $sql = "INSERT INTO Feedback(user_id, fback, added) VALUES($user_id, '$message', $added)";
  if($conn->query($sql) === True){
      echo "Data inserted";
      header("Location:index.php");
  }
  else {
      echo "There was a problem". $conn->error;
  }

?>
