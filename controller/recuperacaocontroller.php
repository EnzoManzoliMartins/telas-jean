<?php

require '../model/cadastromdel.php';

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem. Tente novamente.";
        exit;
    }

    $result = register($nome, $email, $senha);
    
    if ($result) {

        sendVerificationCode($email);
        echo "Cadastro realizado com sucesso! Um código de verificação foi enviado para seu e-mail.";
    } else {
        echo "Não foi possível concluir o cadastro. Tente novamente.";
    }
}

?>
