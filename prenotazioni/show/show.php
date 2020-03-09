<?php
  include __DIR__ . '/server_show.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../dist/app.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <h1>Numero prenotazione: <?php echo $prenotazioneId ?></h1>
          <ul>
            <li>Numero stanza: <?php echo $prenotazione['room_number']; ?></li>
            <li>Nome: <?php echo $prenotazione['name'] ?></li>
            <li>Cognome: <?php echo $prenotazione['lastname'] ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
