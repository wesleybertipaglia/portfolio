<?php
    // destination
    $subject = "Contact From Portfolio";
    $to = "wesleybertipaglia@gmail.com";

    // message
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg_txt = $_POST['message'];

    // headers
    $headers = 'From: Titulo da aplicacao <no-reply@wesleybertipaglia.github.io>'."\r\n" .
    'Reply-To: no-reply@wesleybertipaglia.github.io'. "\r\n" .
    'X-Mailer: MyFunction/' . phpversion().
    'MIME-Version: 1.0' . "\n".
    'Content-type: text/html; charset=UTF-8' . "\r\n";

    // email
    $message = "Name: " . $name . "\nE-mail: " . $email . "\nMessage:\n" . $message;

    // send email
    mail($to, $subject, $message, $headers) or die("Error: " . error_reporting());
    echo 'Message send';
?>
