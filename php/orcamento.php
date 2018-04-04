<?php

function recebeValor($valor){
 return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

function validacao($email){
 return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function envia($nome, $para, $email, $mensagem, $server){
	$headers = "From: $server\r\n" .
	           "Repley-to: $email\r\n" .
	           "X-Mailer: PHP/" . phpversion() . "\r\n";
	$headers .="MIME-VERSION: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 mail($para, $nome, $email, $cidade, $telefone, $produto, nl2br($mensagem), $headers);
}

$server = "email@servidor.com"; //trocar por email servidor
$para = "edureisilustracao@gmail.com";
$nome = recebeValor("Nome");
$email = recebeValor("email");
$cidade = recebeValor("cidade");
$telefone = recebeValor("telefone");
$produto = recebeValor("produto");
$mensagem = recebeValor("Mensagem");

//javascript

if ($nome && $recebeValor && $mensagem){
   envia($nome, $email, $cidade, $telefone, $produto, $mensagem, $para, $server);
   $pagina = "enviado.php";
}else{
   $pagina = "erro.php";
}

header("location:$pagina");

?>