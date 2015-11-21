 <?php session_start();
 $message="";
 require 'db.php'; ?>

 <?php
   $user_id = $_SESSION['user_id'];
   // plan
   $is_complete = $_POST['is_complete'];

   if (!empty($is_complete)) {
     $sql = "UPDATE Plans SET is_completed=$is_complete  WHERE users_id=$user_id ";
     if ($conn->query($sql) === TRUE) {
       echo "Record updated successfully";
     }
     else{
       echo "Error updating record: " . $conn->error;
     }
   }

 ?>
