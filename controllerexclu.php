<?php
// Arquivo controller/excluirFuncionario.php

require_once '../controller/funcionarioController.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Verificar se o ID existe no banco de dados
    $funcionario = buscarFuncionarioPorId($id);
    
    if ($funcionario) {
        excluirFuncionario($id);
        header('Location: ../index.php?msg=Funcionário excluído com sucesso');
    } else {
        header('Location: ../index.php?msg=Funcionário não encontrado');
    }
}
?>
