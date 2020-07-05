<?php

if (isset($_POST['submit'])) {
  $name = $_POST['nome'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['oggetto'];
  $message = $_POST['messaggio'];

if (empty($name) || empty($mailFrom) || empty($subject) || empty($message)) {

header('location:contact.php?emptyfields');
}else{

  $mailTo = "gab.imp2020@yahoo.com";

  if (mail($mailTo,$subject,$message,$mailFrom)) {
    header('location:contact.php?mailsent');
  }
}

}else {
  header('location: contact.php');
}

   ?>
