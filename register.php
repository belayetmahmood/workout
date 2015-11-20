<?php require 'db.php'; ?>

<?php
  // $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  // $address = $_POST['address'];
  // $phone = $_POST['phone'];
  // $weight = $_POST['weight'];
  // $height = $_POST['height'];
  // $users_desc = $_POST['users_desc'];
  // $plan_name = $_POST['plan_name'];


  $sql = "INSERT INTO Users(email, password, type)
          VALUES('$email', '$password', 0);";

  // $sql2 = "INSERT INTO Users_info(address, phone, weight, height, users_desc)
  // VALUES('$address', '$phone', $weight, $height, '$users_desc');";
  //
  // $sql3 = "INSERT INTO Plans(plan_name, is_completed)
  // VALUES('$plan_name', 0);";

  // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  // VALUES ('John', 'Doe', 'john@example.com')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // if (mysqli_query($conn, $sql2)) {
  //   echo "New record created successfully - Users_info";
  // }
  // else {
  //   echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
  // }
  //
  // if (mysqli_query($conn, $sql3)) {
  //   echo "New record created successfully - plans";
  //   header("Location: index.php");
  // }
  // else {
  //   echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
  // }


?>
