<?php
  include 'view_server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=q, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../dist/app.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <h1>Numero stanza: <?php echo $room['room_number'] ?> </h1>
          <ul>
            <li>Piano: <?php echo $room['floor'] ?></li>
            <li>Numero letti: <?php echo $room['beds'] ?></li>
            <li>Creato il: <?php echo $room['created_at'] ?></li>
            <li>Aggiornato il: <?php echo $room['updated_at'] ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
