<?php
  include __DIR__ . '/../database.php';
  $roomId = $_GET['id'];
  $sql = "SELECT * FROM stanze WHERE id = $roomId";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
     $room = $result->fetch_assoc();
   }
   else {
     echo "query error";
   }
  $conn->close();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../dist/app.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form class="" action="server_update.php" method="POST">
            <div class="form-group">
              <label for="room_number">Numero stanza</label>
              <input type="text" class="form-control" name="room_number" value="<?php echo $room['room_number']; ?>">
            </div>
            <div class="form-group">
              <label for="floor">Piano</label>
              <input type="text" name="floor" class="form-control" value="<?php echo $room['floor']; ?>">
            </div>
            <div class="form-group">
              <label for="beds">Letti</label>
              <input type="text" name="beds" class="form-control" value="<?php echo $room['beds']; ?>">
            </div>
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
              <input type="submit" class="form-control" class="btn btn-submit" " name="salva" value="Aggiorna">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
