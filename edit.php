<?php
require 'db.php';

$id = $_POST['id'];
$breed = $_POST['breed'];
$image_url = $_POST['image_url'];
$fact = $_POST['fact'];

$stmt = $conn->prepare("UPDATE cats SET breed=?, image_url=?, fact=? WHERE id=?");
$stmt->bind_param("sssi", $breed, $image_url, $fact, $id);
$stmt->execute();
echo "Cat updated successfully";
?>

