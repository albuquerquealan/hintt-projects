<?php
$name = $_POST['nome'];
//pega os dados que foi digitado no ID name.

$email = $_POST['email'];
//pega os dados que foi digitado no ID email.

$telefone = $_POST['telefone'];
//pega os dados que foi digitado no ID sebject.

$message = $_POST['message'];
//pega os dados que foi digitado no ID message.

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Formulário enviado\n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Comentários: " . $message . "\n";

$email_to =  "contato@solucitrus.com.br";
'seu e-mail aqui que irá receber a mensagem';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo, $headers);
//enviando o email.

if ($status) {
  echo "<script> alert('Formulário enviado com sucesso!'); </script>";
  
//mensagem de form enviado com sucesso.

} else {
  echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
  
//mensagem de erro no envio. 

}
?>