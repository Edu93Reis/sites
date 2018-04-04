<?php


function recebeValor($valor){
 return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

function validacao($email){
	 if(isset($email)){	
	 	return filter_var($email, FILTER_VALIDATE_EMAIL); 
	 }else{
		function checaDados($vet){
			foreach($vet as $val){ 
				if (preg_match("/(%0A|%0D|\n+|\r+)/i", $val) != 0){
				 echo "Tentativa de injeção de dados."; return 1; 
				}
			}
			return 0;
		}
     }
}


function envia($assunto, $nome, $para, $email, $mensagem, $server){
	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $para . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $headers .="MIME-VERSION: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf8\r\n";

    mail($para, $assunto, nl2br($mensagem), $headers);

}

	$para = "contato@edureis.com.br";
	$nome = recebevalor('nome');
	$email = recebevalor('email');
	$server = "contato@edureis.com.br";
	$mensagem = recebevalor('mensagem');
	$assunto = "Contato site";

   	if ($nome && $email && $mensagem){
   	   envia($assunto, $nome, $para, $email, $mensagem, $server);   	   	
	   $pagina = "enviado.php";   
	}else{
	   $pagina = "erro.php";   
	}

header("Location:$pagina");

?>