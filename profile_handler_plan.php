<?php session_start();
$message="";
require 'db.php'; ?>

<?php
  $user_id = $_SESSION['user_id'];
  // plan
  $plan_name = $_POST['plan_name'];
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
      $sql = "UPDATE Plans SET plan_name='$plan_name' WHERE users_id=$user_id ";
      if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location:profile.php");
      }
      else{
        echo "Error updating record: " . $conn->error;
      }
    }
    else {
      $sql = "INSERT INTO Plans(users_id, plan_name) VALUES($user_id, '$plan_name')";
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
