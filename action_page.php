<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uname"]["name"]);
$uploadOk = 1;
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["uname"]["tmp_name"]);
  
}
?>
