<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../model/cadastromodel.php';

if ($_POST) {
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $confirmar_senha = $_POST['confirmar_senha'] ?? null;

    if ($nome && $email && $senha && $confirmar_senha) {
        if ($senha !== $confirmar_senha) {
            header("Location: ../view/cadastro.php?erro=As+senhas+não+coincidem");
            exit;
        }

        $result = register($nome, $email, $senha);
        if ($result) {
            header("Location: ../view/cadastro.php?sucesso=1");
        } else {
            header("Location: ../view/cadastro.php?erro=Não+foi+possível+realizar+o+cadastro");
        }
    } else {
        header("Location: ../view/cadastro.php?erro=Preencha+todos+os+campos");
    }
    exit;
}
