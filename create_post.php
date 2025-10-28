<?php
include 'db.php';
session_start();
$content = $_POST['content'];
$user_id = $_SESSION['user']['id'];
$stmt = $conn->prepare("INSERT INTO posts (user_id, content) VALUES (?, ?)");
$stmt->bind_param("is", $user_id, $content);
$stmt->execute();
echo "Post created";
?>