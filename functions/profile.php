<?php
session_start();
include('../config/config.php');

$password = $_POST['passWord'];
$email = $_POST['email'];

$sql = "UPDATE users SET sha_pass=?, email=? WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $password, $email, $username);
$stmt->execute();
if ($stmt->error) {
  echo "There has been a problem updating your profile";
}else{
  echo "Updated {$stmt->affected_rows} rows";
}
$stmt->close();
?>
