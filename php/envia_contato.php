
<?php

$btnSalvar = filter_input(INPUT_POST, 'btnSalvar', FILTER_SANITIZE_STRING);

$name = $_POST["nome"];
$email = $_POST["email"];

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From:" . $email . " \r\n";
$texto .= "<h3>Finalize seu cadastro</h3><br>
			<b>Olá:</b> $name<br>
			Para finalizar seu cadastro em nosso site clique <a href='http://konigtelecom.com/zuna/cadastro_completo.html'>aqui</a>.<br><br>
			
			
			Zuna Departamento Comercial ...<br>
			Obrigado";
mail($email, 'Teste de E-mail', $texto, $headers);

print '<script>location.href= "../sucesso_envio_email.html";</script>';

?>

