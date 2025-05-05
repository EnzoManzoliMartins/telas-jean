<?php

function login($email, $senha) {
    $pdo = new UsePDO();
    $conn = $pdo->getInstance();
    $stmt = $conn->prepare("SELECT senha FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if (password_verify($senha, $user->senha)){

            return true;
        } 
    }
}