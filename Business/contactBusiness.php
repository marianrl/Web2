<?php   

require_once('../vendor/autoload.php');
require_once('../config/mail.php');


function sendMail($data){
    $transport = (new Swift_SmtpTransport($mail_smtp_addr, $mail_smtp_port));
    setUsername($mail_smtp_user);
    setPassword($mail_smtp_pass);

    $mailer = new Swift_Mail($transport);

    $message = (new Swift_Message('Contacto desde la tienda'));
    setFrom ([$data['email']=>$data['name']]);
    setTo ([$mail_smtp_user => 'Formulario de contacto']);
    setBody($this->processMailBody($data));
    setContentType("text/html");

    return $mailer->send($message);

}



