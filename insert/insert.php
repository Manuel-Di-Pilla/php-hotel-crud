<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../dist/app.css">
    <title></title>
  </head>
  <body>
    <form  action="server_insert.php" method="POST">
      <div class="form-group">
        <label for="room_number">Numero stanza</label>
        <input type="text" name="room_number" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="floor">Piano</label>
        <input type="text" name="floor" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="beds">Letti</label>
        <input type="text" name="beds" class="form-control" value="">
      </div>
      <div class="form-group">
        <input type="submit" class="form-control" class="btn btn-submit" name="" value="Salva">
      </div>
    </form>
  </body>
</html>
