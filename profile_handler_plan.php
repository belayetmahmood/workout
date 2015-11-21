<?php session_start();
$message="";
require 'db.php'; ?>

<?php
  $user_id = $_SESSION['user_id'];
  // plan
  $plan_name = $_POST['plan_name'];
  if ($plan_name === 'Weekly') {
    $duration = 7;
  }
  elseif ($plan_name === 'Monthly') {
    $duration = 30;
  }
  elseif ($plan_name === 'Yearly') {
    $duration = 365;
  }
  // $current_date = date("Ymd");

  $current_date = date("Ymd");


  // $date=date_create($current_date);
  // date_add($date,date_interval_create_from_date_string("-5 day"));
  // $current_date = date_format($date,"Ymd");

  // user info
  // $name = $_POST['name'];
  // $address = $_POST['address'];
  // $phone = $_POST['phone'];
  // $weight = $_POST['weight'];
  // $height = $_POST['height'];
  // $users_desc = $_POST['users_desc'];

  if (!empty($plan_name)) {
    $sql = "SELECT * FROM Plans WHERE users_id=$user_id ";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if (is_array($row) && !empty($row)) {
      $sql = "UPDATE Plans SET plan_name='$plan_name', duration=$duration, start_date=$current_date  WHERE users_id=$user_id ";
      if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location:profile.php");
      }
      else{
        echo "Error updating record: " . $conn->error;
      }
    }
    else {
      $sql = "INSERT INTO Plans(users_id, plan_name, duration, start_date) VALUES($user_id, '$plan_name', $duration, $start_date)";
      if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
        header("Location:profile.php");
      }
      else{
        echo "Error inserting record: " . $conn->error;
      }
    }
  }

?>
