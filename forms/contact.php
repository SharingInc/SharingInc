<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message');
  
  $to = "sarthakhanda.work@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($to, $subject, $txt, $headers);
  header("Location: index.html?formsubmitted");
}

?>
