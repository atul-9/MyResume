<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Create an email message
  $email_message = "Name: $name\n";
  $email_message .= "Email: $email\n";
  $email_message .= "Subject: $subject\n";
  $email_message .= "Message:\n$message";

  // Send the email
  $to = "atul09agrawal@gmail.com"; // Replace with your email address
  $headers = "From: $email";
  $mail_sent = mail($to, $subject, $email_message, $headers);

  // Return a response
  if ($mail_sent) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
