<?php
require_once '../includes/db.php';

$file_name = $_FILES['protfolio_image']['name'];
$after_explode = explode("." , $file_name);
$file_extension = end($after_explode);
$excepted_extension = array("jpg" , "jpeg" , "png" , "JPG" , "JPEG" , "PNG");
if(in_array($file_extension , $excepted_extension)){
  if($_FILES['protfolio_image']['size'] <= 500000){
    $protfolio_name = $_POST['protfolio_name'];
    $protfolio_title = $_POST['protfolio_title'];

    $protfolio_insert_query = "INSERT INTO protfolios (protfolio_name,protfolio_title) VALUES ('$protfolio_name', '$protfolio_title')";
    mysqli_query($db_conntect , $protfolio_insert_query);
    $last_id = mysqli_insert_id($db_conntect);
    $new_file_name = $last_id.".".$file_extension;
    $old_location = $_FILES['protfolio_image']['tmp_name'];
    $new_location = "../uploads/protfolio/".$new_file_name;
    move_uploaded_file($old_location,$new_location);
    $protfolio_update_query = "UPDATE protfolios SET protfolio_image = '$new_file_name' WHERE id = $last_id";
    mysqli_query($db_conntect , $protfolio_update_query);
    header("location: ../protfolio.php");
  }
  else {
    echo "Hobe Na";
  }
}
else {
  echo "Your file is not supported";
}

?>
