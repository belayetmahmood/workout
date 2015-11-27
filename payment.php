<?php session_start();
$message="";
require 'db.php'; ?>

<?php
  $user_id = $_SESSION['user_id'];
  // price

  $credit_no = $_POST['credit'];
  $ex_date = $_POST['ex_date'];
  $ex_date = date ("Ymd", strtotime($ex_date));
  $pin = $_POST['pin'];


  $sql = "INSERT INTO Payment(user_id, credid_card_number, expire_date, three_digit_pin) VALUES($user_id, $credit_no, $ex_date, $pin)";
  if($conn->query($sql) === True){
      echo "Data inserted";
      header("Location:profile.php");
  }
  else {
      echo "There was a problem". $conn->error;
  }

?>
