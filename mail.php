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
    ob_start();
    include("response.php");
    $message = ob_get_contents();
    ob_get_clean();

    // send email
    mail($to, $subject, $message, $headers) or die("Error: " . error_reporting());
    echo 'Message send';
?>
