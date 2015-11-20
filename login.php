<?php session_start();
$message="";
require 'db.php'; ?>

<?php
  $email = $_POST['email'];
  $password = $_POST['password'];


  if(!empty($email) && !empty($password)) {
      $sql = "SELECT * FROM Users WHERE email='$email' AND password='$password'; ";
      $result = $conn->query($sql);
      $row  = mysqli_fetch_array($result);

      if(is_array($row)) {
        $_SESSION["user_id"] = $row[id];
      } else {
        $message = "Invalid Username or Password!";
      }
      $message = "successfully logged in";
      // if($result->num_rows > 0) {
      //     // output data of each row
      //     while($row = $result->fetch_assoc()) {
      //         $user_id = $row["id"];
      //     }
      //     $_SESSION['user_id'] = $user_id;
      //     header("Location: admin.php");
      //     exit();
      // }
      // else {
      //     echo "User not found, Wrong email pass combination";
      // }
      $conn->close();

      if(isset($_SESSION["user_id"])) {
        header("Location:admin.php");
      }
  }
  else {
    $message = "email & password can not be empty";
  }

?>
