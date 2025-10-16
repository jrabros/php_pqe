<?php

// function send($data){
    
// }

function send(array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com';
    $email->Port = 587;
    $email->SMTPAuth = true;
    $email->Username = 'meu -email';
    $email->Password = 'senhasenha';
    $email->isHTML(true);
    $email->setFrom('joaopilzbarros@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'] ?? 'Sem assunto';
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que acerta ver HTML';
    $email->msgHTML($data['mensagem']);
    return $email->send();
}