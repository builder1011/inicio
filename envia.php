<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$para = "andreosedu23@gmail.com";
$assunto = "Coleta de dados";

$corpo = "Nome: ".$nome."\n"."E-email: ".$email."\n"."Telefone: ".$telefone;

$cabeca = "From andreosedu23@gmail.com"."\n"."Reply-to": ".$email." "\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso");
}else {
    echo("Houve um erro ao enviar o email!");
}
?>