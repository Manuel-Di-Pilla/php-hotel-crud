<?php
  include 'database.php';
  $sql = "SELECT * FROM stanze";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
    $rooms = [];
     while($row = $result->fetch_assoc()) {
       $rooms [] = $row;
     }
   } elseif ($result) {
     echo "0 results";
   }
   else {
     echo "query error";
   }
  $conn->close();
?>
