<?php
// PEGANDO DADOS DO FORMULARIO
$text = $_post ['nome'];
$telefone = $_POST ['telefone'];
$text = $_POST ['mensagem'];
$data_atual = date('d/m/y');
$hora_atual = date ('h:i:s');

//CONFIGURAÇÕES DE CREDENCIAIS

$SERVER = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'fretado_formulario';

//CONEXÃO COM NOSSOS DADOS


$conn = new mysqli ($server, $usuario, $senha, $banco);

if ($conn-> CONNECT_ERROR){
  die(" falha ao se comunicar co banco de dados:".$conn-> connect_error)
    }

$smtp = $conn->prepare("insert into mensagens (nome, telefone, mensagem, data, hora) values(?,?,?,?,?)");

$SMTP->BIND_PARAM("SSSSS",$nome, $telefone,$mensagem, $data_atual,$hora_atual);

if($smtp->execute()){
    echo "mensagem enviada com sucesso!";
}else{
    echo" Erro no envio da mensagem:" .$smpt->error;
}
$smpt->close();
$conn->close();

?>