<?php

if (isset($_POST['submit'])) {
  $name = $_POST['nome'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['oggetto'];
  $message = $_POST['messaggio'];

  $mailTo = "cobra0571@hotmail.it";
  $headers = "Da: " . $mailFrom;
  $textmail = "Hai ricevuto un'e-mail da " . $name . ".\n\n" . $message;

  mail($mailTo,$subject,$textmail,$headers);
  header("Location: contact.php?mailsent");
}

   ?>
