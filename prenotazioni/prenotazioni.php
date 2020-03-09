<?php
  include __DIR__ . '/server_prenotazioni.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../dist/app.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Tutte le prenotazioni</h1>
        <table class="table">
          <tr>
            <th>Id</th>
            <th>Room Id</th>
            <th>Crated</th>
            <th></th>
          </tr>
          <?php
            if (!empty($prenotazioni)) {
              foreach ($prenotazioni as $value) {?>
                <tr>
                  <td><?php echo $value['id'] ?></td>
                  <td><?php echo $value['stanza_id'] ?></td>
                  <td><?php echo $value['created_at'] ?></td>
                  <td> <a href="show/show.php?id=<?php echo $value['id'] ?>">Dettagli</a> </td>
                </tr>
              <?php }
            }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
