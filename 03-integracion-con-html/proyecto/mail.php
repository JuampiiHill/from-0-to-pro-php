<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';


function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuracion inicial del servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '4b330cf8e41e7c';
    $phpmailer->Password = '9ee3863216cdf6';

    // Añadiendo destinatarios
    $phpmailer->setFrom('jph@hillcoat.com', 'Juan');
    $phpmailer->addAddress($email, $name);

    // Definiendo el contenido de mi email
    $phpmailer->isHTML($html);
    $phpmailer->Subject = $subject;
    $phpmailer->Body = $body;

    // Enviar correo
    $phpmailer->send();
}
?>