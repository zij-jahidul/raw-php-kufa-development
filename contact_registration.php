<?php
require 'includes/db.php';
// echo "Name : ".$_POST['visitor_name']."<br>";
// echo "Email : ".$_POST['visitor_email']."<br>";
// echo "Message : ".$_POST['visitor_message']."<br>";



if(empty($_POST['user_name'])){
  echo "Where are your Name ?";
}
else if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
  echo "Your Email Is Not Valid";
}
else if(empty($_POST['user_email'])){
  echo "Where are your Email ?";
}

else if(empty($_POST['user_password'])){
  echo "Where are your password ?";
}
else {

  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];

  $check_query = "SELECT * FROM users WHERE user_email = '$user_email'";
  $checking_from_db = mysqli_query($db_conntect , $check_query);

  if($checking_from_db->num_rows == 1){
    echo "This Email Is Used";
  }
  else {
    echo "This is New Email";
  }

  $insert_query = "INSERT INTO users (user_name,user_email, user_password) VALUES ('$user_name' , '$user_email' , '$user_password')";
  mysqli_query($db_conntect ,$insert_query);


}
