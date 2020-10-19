<?php
$nome = $_POST['campo_nome'];
$email = $_POST['campo_email'];
$mensagem = $_POST['campo_textarea'];
$assunto = $_POST['campo_assunto'];
$contato="From: $nome \n Email: $email \n Message: $mensagem";
$destinatario = "josenilton-silva@hotmail.com";
$mailheader = "From: $email \r\n";
mail($destinatario, $assunto, $contato, $mailheader) or die("Error!");
echo "Email Enviado!";
?>