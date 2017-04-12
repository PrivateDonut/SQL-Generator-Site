<?php
session_start();
if(isset($_SESSION['username'])) {
  session_unset($_SESSION['username']);
  header('location: ../?=home');
}else{
 echo "You are already logged out!";
 header('refresh:2; ../?p=home');
}
?>
