<?php

require '../service/conexao.php';

function register($nome, $email, $senha) {
    $conn = new usePDO;
    $instance = $conn->getInstance(); 

    $sql = "INSERT INTO pessoa (nome, email) VALUES (?, ?)";
    $stmt = $instance->prepare($sql);                                   
    $stmt->execute([$nome, $email]);

    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    $Idpessoa = $instance->lastInsertId();

    $sql = "INSERT INTO usuario (nome, senha, id_pessoa) VALUES (?, ?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$nome, $hashed_password, $Idpessoa]);

    $result = $stmt->rowCount();

    sendVerificationCode($email);

    return $result;
}

function sendVerificationCode($email) {
    $codigo = rand(100000, 999999);  

    mail($email, "Código de Verificação", "Seu código de verificação é: $codigo");

}

?>
