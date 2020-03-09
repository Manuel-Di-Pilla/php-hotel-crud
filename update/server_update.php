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
  if (!empty($_POST['id'])) {
    $roomId = $_POST['id'];
  }
  $stmt = $conn->prepare("UPDATE stanze SET room_number = ?, floor = ?, beds = ?, updated_at = NOW() WHERE id = ?");
  $stmt->bind_param("iiii", $room_number, $floor, $beds, $roomId);
  $stmt->execute();
  $conn->close();
  if ($stmt->affected_rows > 0) {
    header("Location: http://localhost/php-hotel-crud/view/view.php?id=$roomId");
  } else {
    echo 'KO';
  }
?>
