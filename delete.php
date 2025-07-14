<?php
require 'db.php';
$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM cats WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
echo "Cat deleted successfully";
?>
