<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../model/UsePDO.php'; 
require_once '../model/loginmodel.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $pdo = new UsePDO();
        $conn = $pdo->getInstance();

        $stmt = $conn->prepare("SELECT senha FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_OBJ); 

            if (password_verify($senha, $user->senha)) {

                session_start();
                $_SESSION['usuario'] = $email;

                header("Location: painel.php");
                exit();
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "E-mail não cadastrado.";
        }
    } else {
        echo "Por favor, preencha todos os campos de email e senha.";
    }
}
?>
