<?php
require_once '../model/UsePDO.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (!$email || !$senha) {
        echo "Preencha todos os campos.";
        exit;
    }

    $pdo = new UsePDO();
    $conn = $pdo->getInstance();

    $stmt = $conn->prepare("SELECT id FROM pessoa WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $pessoa = $stmt->fetch(PDO::FETCH_OBJ);
        $id_pessoa = $pessoa->id;

        $stmt = $conn->prepare("SELECT senha FROM usuario WHERE id_pessoa = :id_pessoa");
        $stmt->bindParam(':id_pessoa', $id_pessoa);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $usuario = $stmt->fetch(PDO::FETCH_OBJ);

            if (password_verify($senha, $usuario->senha)) {
                session_start();
                $_SESSION['usuario'] = $email;
                header("Location: painel.php");
                exit;
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }
    } else {
        echo "E-mail não cadastrado.";
    }
}
?>
