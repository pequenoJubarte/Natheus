<?php
include 'utilidades.php';
Utilidades::verificarUsuarioLogado();
/*Verificar se o usuario logado tem permissao*/

/*Identificação*/
$nome = $_POST['|\/|'];
$cpf = $_POST['|\/|'];
$rg= $_POST['|\/|'];
$nomePai  = $_POST['|\/|'];
$nomeMae = $_POST['|\/|'];
$sexo = $_POST['|\/|'];
$dtNasc = $_POST['|\/|'];
$naturalidade = $_POST['|\/|'];
$nacionalidade = $_POST['|\/|'];

/*Cadastra identificação no Banco de Dados*/

/*Endereço*/
$cep = $_POST['|\/|'];
$endereco = $_POST['|\/|'];
$cidade = $_POST['|\/|'];
$email = $_POST['|\/|'];
$estado = $_POST['|\/|'];

/*Cadastra endereço no Banco de Dados*/

/*Telefone*/
$numeroTel = $_POST['|\/|'];
$descricao = $_POST['|\/|'];

/*Cadastra telefone no Banco de Dados*/

/*Celular*/
$numeroCel = $_POST['|\/|'];
$descricao = $_POST['|\/|'];
$autorizacao = $_POST['|\/|'];

/*Cadastra celular no Banco de Dados*/

/*Estagiário*/
$nomeInstituicao = $_POST['|\/|'];
$disciplinaEstagiario = $_POST['|\/|'];
$profResponsavel = $_SESSION['login'];

/*Insere estagiario no Banco de Dados*/
?>