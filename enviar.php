<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$para = "jeanviana.dev@gmail.com";
$assunto = "coleta de dados - entre em contato";
$corpo = "Nome: ".$nome."\n"."E-mail:"."\n".$email."\n"."Telefone:" .$telefone;
$cabeca = "From: contato.olieviana@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para, $assunto, $corpo, $cabeca)){
    $mensagem = "E-mail enviado com sucesso!";
    echo "<script>alert('$mensagem'); window.location.href = 'http://www.jeanmviana.com';</script>";
} else {
    $mensagem = "Houve um erro ao enviar o email";
    echo "<script>alert('$mensagem');</script>";
}
?>
