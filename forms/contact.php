<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = htmlspecialchars($_POST["name"]);
  $email   = htmlspecialchars($_POST["email"]);
  $subject = htmlspecialchars($_POST["subject"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "deeprudradr@gmail.com";  // 🔁 Replace with your email
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $full_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  if (mail($to, $subject, $full_message, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Error sending message.";
  }
}
?>
