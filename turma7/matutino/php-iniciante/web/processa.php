<?php
//Fazer a conexao com banco
$tipoDeConexao = 'mysql:dbname=usuarios;host=127.0.0.1';
$usuario = 'root';
$senhaDoBanco = '';

$conexao = new PDO($tipoDeConexao, $usuario, $senhaDoBanco);

//Dois arrays super globais $_GET & $_POST
$dadosFormulario = $_POST;

$sql = "
    INSERT INTO 
        usuarios(nome, email, criado_em, atualizado_em) 
    VALUES(:nome, :email, NOW(), NOW())";

$inserirUsuario = $conexao->prepare($sql);
$inserirUsuario->bindValue(':nome', $dadosFormulario['nome'], PDO::PARAM_STR);
$inserirUsuario->bindValue(':email', $dadosFormulario['email'], PDO::PARAM_STR);

print $inserirUsuario->execute();

$select = 'SELECT * FROM usuarios';

$usuarios = $conexao->query($select);

var_dump($usuarios->fetchAll(PDO::FETCH_ASSOC));

// print $dadosFormulario['nome']; 
// print '<hr>';
// print $dadosFormulario['email']; 
