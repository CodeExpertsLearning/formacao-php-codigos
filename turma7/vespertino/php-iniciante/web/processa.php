<?php

$tipoConexao = 'mysql:dbname=contatos_app;host=127.0.0.1';
$usuario     = 'root';
$senha       = '';

$conexao = new PDO($tipoConexao, $usuario, $senha);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//2 arrays super globais: $_GET | $_POST
$dadosFormulario = $_POST;

//CREATE
$sql = '
    INSERT INTO usuarios(nome, email, criado_em, atualizado_em) 
    VALUE(:nome, :email, NOW(), NOW())
';

//Prepared Statements
$inserir = $conexao->prepare($sql);
$inserir->bindValue(':nome', $dadosFormulario['nome'], PDO::PARAM_STR);
$inserir->bindValue(':email', $dadosFormulario['email'], PDO::PARAM_STR);

print $inserir->execute();

//READ
$sql = 'SELECT * FROM usuarios';

$usuarios = $conexao->query($sql);

print '<pre>';
// var_dump($usuarios->fetchAll(PDO::FETCH_ASSOC));

// var_dump($dadosFormulario);

// print 'Nome enviado: '
//  . $dadosFormulario['nome'];

foreach($usuarios->fetchAll(PDO::FETCH_ASSOC) as $usuario)
{
    print '<li>Usuário salvo: ' 
          . $usuario['nome'] . ', ID: ' . $usuario['id'] . '</li>';
}

//Update

//Delete
$sql = 'DELETE FROM usuarios WHERE email = :email';

$delete = $conexao->prepare($sql);
$delete->bindValue(':email', 'nandokstro@gmail.com', PDO::PARAM_STR);

print $delete->execute();


// $usuarios = $conexao->query($sql);

