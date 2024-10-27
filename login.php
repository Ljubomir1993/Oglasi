<?php
session_start();
require 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id, name FROM users WHERE email = '$email' AND password = '$password'";
$query = mysqli_query($db,$sql);
$result = mysqli_fetch_assoc($query);
if ($result) {
  $_SESSION['id'] = $result['id'];
  $_SESSION['name'] = $result['name'];
  header("Location: index.php");
}
else {
  header("Location: login.view.php");
}
 ?>
