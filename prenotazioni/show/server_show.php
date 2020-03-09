<?php
  include __DIR__ . '/../../database.php';
  $prenotazioneId = $_GET['id'];

  $sql = "SELECT stanze.room_number, ospiti.name, ospiti.lastname FROM prenotazioni INNER JOIN prenotazioni_has_ospiti ON prenotazioni.id = prenotazioni_has_ospiti.prenotazione_id INNER JOIN ospiti ON prenotazioni_has_ospiti.ospite_id = ospiti.id INNER JOIN stanze ON prenotazioni.stanza_id = stanze.id WHERE prenotazioni.id = $prenotazioneId";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
    $prenotazione = $result->fetch_assoc();
   } elseif ($result) {
     echo "0 results";
   } else {
     echo "query error";
   }
  $conn->close();
?>
