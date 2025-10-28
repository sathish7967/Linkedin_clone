<?php
include 'db.php';
$result = $conn->query("SELECT posts.*, users.name FROM posts JOIN users ON posts.user_id = users.id ORDER BY created_at DESC");
$posts = [];
while ($row = $result->fetch_assoc()) {
  $posts[] = $row;
}
echo json_encode($posts);
?>