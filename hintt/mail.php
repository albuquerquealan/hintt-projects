<?php
$name = $_POST['nome'];
//pega os dados que foi digitado no ID name.

$email = $_POST['email'];
//pega os dados que foi digitado no ID email.

$telefone = $_POST['telefone'];
//pega os dados que foi digitado no ID telefone.

$message = $_POST['msg'];
//pega os dados que foi digitado no ID message.

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

$subject = "Dúvidas Solucitros SITE";
/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo .= "<b> Enviado por: </b>  " . $name . "<br />";

$corpo .= "<b>E-mail:</b> " . $email . "<br />";

$corpo .= "<b>Mensagem:</b> <br /><br />";

$corpo .= $message;

$corpo .= "<br /> ----- <br /> <b>Este e-mail foi enviado pelo seu formulário de contato no seu site.</b> <br />";

$email_to =  "contato@solucitrus.com.br";

//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo, $headers);
//enviando o email.

if ($status) {
    echo "<script> alert('Formulário enviado com sucesso!'); </script>";
   header ("Location: / ");

  
//mensagem de form enviado com sucesso.

} else {
  echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
  
//mensagem de erro no envio. 

}
?>