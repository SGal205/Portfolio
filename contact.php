<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "sujangalpottage@outlook.com"; // Replace this with your actual email
  $subject = "New message from portfolio site";

  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $headers = "From: $email";
  $body = "From: $name\nEmail: $email\n\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>
