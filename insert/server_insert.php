<?php
  include __DIR__ . '/../database.php';
  if (!empty($_POST['room_number'])) {
    $room_number = $_POST['room_number'];
  }
  if (!empty($_POST['floor'])) {
    $floor = $_POST['floor'];
  }
  if (!empty($_POST['beds'])) {
    $beds = $_POST['beds'];
  }
  $stmt = $conn->prepare("INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())");
  $stmt->bind_param("iii", $room_number, $floor, $beds);
  $stmt->execute();
  $conn->close();
  if (isset($stmt->insert_id)) {
    header("Location: http://localhost/php-hotel-crud/view/view.php?id=$stmt->insert_id");
  } else {
    echo 'KO';
  }
?>
