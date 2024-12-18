<?php
// Arquivo views/adicionarFuncionario.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../controller/funcionarioController.php';
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $data_contratacao = $_POST['data_contratacao'];
    $departamento = $_POST['departamento'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    criarFuncionario($nome, $cargo, $salario, $data_contratacao, $departamento, $endereco, $telefone, $email);
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionário</title>
</head>
<body>

<h1>Adicionar Novo Funcionário</h1>

<form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required><br>

    <label for="cargo">Cargo:</
