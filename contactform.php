<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $telephone = $_POST['telephone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "joshembling@gmail.com";
  $headers = "From: " . $mailFrom;
  $txt = "You have received an email from " . $name . ".\n\n" . $message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}
