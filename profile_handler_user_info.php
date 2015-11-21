<?php session_start();
$message="";
require 'db.php'; ?>

<?php
  $user_id = $_SESSION['user_id'];

  // user info
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $weight = $_POST['weight'];
  $height = $_POST['height'];
  $users_desc = $_POST['users_desc'];

  if (!empty($name) && !empty($address) && !empty($phone) && !empty($weight) && !empty($height) && !empty($users_desc)) {
    $sql = "SELECT * FROM Users_info WHERE users_id=$user_id ";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if (is_array($row) && !empty($row)) {
      $sql = "UPDATE Users_info SET name='$name', address='$address', phone='$phone', weight=$weight, height=$height, users_desc='$users_desc' WHERE users_id=$user_id ";
      if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location:profile.php");
      }
      else{
        echo "Error updating record: " . $conn->error;
      }
    }
    else {
      $sql = "INSERT INTO Users_info(users_id, name, address, phone, weight, height, users_desc)
              VALUES($user_id, '$name', '$address', '$phone', $weight, $height, '$users_desc')";
      if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
        header("Location:profile.php");
      }
      else{
        echo "Error inserting record: " . $conn->error;
      }
    }
  }
  else {
    echo "Please insert data in all field";
  }

?>
