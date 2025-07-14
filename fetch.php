<?php
require 'db.php';
$result = $conn->query("SELECT * FROM cats ORDER BY created_at DESC");

$cats = [];
while ($row = $result->fetch_assoc()) {
  $cats[] = $row;
}
echo json_encode($cats);
?>
