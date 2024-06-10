<?php
$rg = addslashes($_POST['nome']);
$cpf = addslashes($_POST['prestador']);
$cnh = addslashes($_POST['email']);
$email = addslashes($_POST['opinião']);

$para = "joaoanime.com@gmail.com";
$assunto = "cadastro constrube";

$corpo = "nome: ".$rg."\n"."serviço: ".$cpf."\n"."email: ".$cnh"."\n"."email: ".$email;

$cabeca = "from: joaoanime.com@gmail.com"."\n"."Reply-to: "$email"."\n"."X-Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("Mandamos um E-mail de confirmação cheque o seu E-mail");
}else{
    echo("hove um erro");
}

?>