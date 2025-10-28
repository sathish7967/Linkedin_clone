<?php
include 'db.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$result = $conn->query("SELECT * FROM users WHERE email='$email'");
$user = $result->fetch_assoc();
if ($user && password_verify($password, $user['password'])) {
  $_SESSION['user'] = $user;
  echo json_encode($user);
} else {
  echo "Invalid credentials";
}
?>