<?php
ob_start();
session_start();
include('../config/config.php');

function shaenc($user, $pass) {
  $user = strtoupper($user);
  $pass = strtoupper($pass);
  return sha1($user.':'.$pass);
}

$username = $_POST['userName'];
$password = shaenc($_POST['userName'], $_POST['passWord']);
$email = $_POST['email'];
$regdate = time();
$regip = $_SERVER['REMOTE_ADDR'];

mysqli_select_db($conn, $database);


$userCheck = "SELECT username FROM users WHERE username = '$username'";
  // Might be unsecured? Make sure to edit this later.
  $result = $conn->query($userCheck);
  if ($result->num_rows > 0) {
    echo "Username is taken!";
}else
$emailCheck = "SELECT email FROM users WHERE email = '$email'";
  // Might be unsecured? Make sure to edit this later.
  $result = $conn->query($emailCheck);
  if ($result->num_rows > 0) {
  echo "Email is already in use!";
}else{
$stmt = $conn->prepare("INSERT INTO users (username, sha_pass, email, reg_date, reg_ip, current_ip) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss", $username, $password, $email, $regdate, $regip, $regip);
if($stmt->execute()) {
  echo "Success";
$_SESSION['username'] = $_POST['userName'];
}else{
echo "Sorry, an error has occurred!";
 }
}
?>
