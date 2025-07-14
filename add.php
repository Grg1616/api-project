<?php
require 'db.php';

$breed = $_POST['breed'];
$image_url = $_POST['image_url'];
$fact = $_POST['fact'];

$stmt = $conn->prepare("INSERT INTO cats (breed, image_url, fact) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $breed, $image_url, $fact);
$stmt->execute();
echo "Cat added successfully";
?>
