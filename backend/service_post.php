<?php
require_once '../includes/db.php';
// // echo "Name : ".$_POST['visitor_name']."<br>";
// // echo "Email : ".$_POST['visitor_email']."<br>";
// // echo "Message : ".$_POST['visitor_message']."<br>";
//

if(empty($_POST['service_icon'])){
  echo "Where are your service_icon ?";
}
else if(empty($_POST['service_title'])){
  echo "Where are your service_title ?";
}
else if(empty($_POST['service_information'])){
  echo "Where are your service_information ?";
}
else {
  $service_icon = $_POST['service_icon'];
  $service_title = $_POST['service_title'];
  $service_information = $_POST['service_information'];
  $service_insert_query = "INSERT INTO services (service_icon,service_title, service_information) VALUES ('$service_icon' , '$service_title' , '$service_information')";

  mysqli_query($db_conntect ,$service_insert_query);
  header("location: ../services.php");

}






?>
