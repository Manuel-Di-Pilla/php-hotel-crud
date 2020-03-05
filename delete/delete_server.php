<?php
  include __DIR__ . '/../database.php';
  $roomId = $_POST['id'];
  $sql = "DELETE FROM `stanze` WHERE `id` =  '$roomId'";
  $result = $conn->query($sql);
  if($result) {
    header("Location: http://localhost/php-hotel-crud/index.php?roomNumber=$roomId");
  } else {
    echo 'KO';
  }
  $conn->close();
?>
