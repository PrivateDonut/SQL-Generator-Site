<?php
session_start();
include('../config/config.php');

function shaenc($user, $pass) {
  $user = strtoupper($user);
  $pass = strtoupper($pass);
  return sha1($user. ':'.$pass);
}

$username = $_POST['userName'];
$password = shaenc($_POST['userName'], $_POST['passWord']);
$currentip = $_SERVER['REMOTE_ADDR'];

mysqli_select_db($conn, $database);
$stmt = $conn->prepare("SELECT username, sha_pass FROM users WHERE username = ? AND sha_pass = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($user, $pass);
$stmt->store_result();
if($stmt->num_rows > 0) {
  while($stmt->fetch()) {
    $stmt = $conn->prepare("UPDATE users SET current_ip = ? WHERE username = ?");
    $stmt->bind_param("ss", $currentip, $user);
    if($stmt->execute()) {
    $_SESSION['username'] = $user;
    header('location: ../?p=item');
  }
 }
}else{
  echo "Account either doesn't exist or wrong password!";
}
?>
