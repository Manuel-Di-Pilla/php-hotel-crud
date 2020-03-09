<?php
  include 'server.php';
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hotel</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Numero Stanza</th>
                <th>Piano</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($rooms as $room) {?>
                <tr>
                  <td><?php echo $room['id'] ?></td>
                  <td><?php echo $room['room_number'] ?></td>
                  <td><?php echo $room['floor'] ?></td>
                  <td> <a href="view/view.php?id=<?php echo $room['id'] ?>">VIEW</a> </td>
                  <td> <a href="update/update.php?id=<?php echo $room['id'] ?>">UPDATE</a> </td>
                  <td>
                    <form action="delete/delete_server.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                      <input class="btn btn-danger" type="submit" value="DELETE">
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
