<?php
session_start();


require 'includes/db.php';
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$login_query = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password' ";
$data_form_db = mysqli_query($db_conntect, $login_query);
$user = mysqli_fetch_assoc($data_form_db);

if($data_form_db->num_rows == 1){
  $_SESSION['login'] = 'login successfully';
  $_SESSION['user_email'] = $user_email;
  $_SESSION['name'] = $user['user_name'];

  header("location: dashboard.php");
}
else {
  echo "ei email nei ";
}


?>
