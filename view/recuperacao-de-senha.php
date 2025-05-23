<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="receperacao-de-senha.css">
</head>
<body>
    <div class="container">
        <h1>Recuperação de Senha</h1>
        <p>Digite seu e-mail cadastrado para receber as instruções de recuperação</p>
       
        <div class="success-message" id="successMessage">
            Um e-mail com as instruções foi enviado para o endereço fornecido.
        </div>
       
        <form id="recoveryForm">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required placeholder="seu@email.com">
                
                <button type="submit">enviar email</button>
                <div class="login-link">
            <a href="login.php">Voltar ao login</a>
        </div>

    <script>
        document.getElementById("recoveryForm").addEventListener("submit", function(event) {
            event.preventDefault(); 
            window.location.href = "codigo.php"; 
        });

        
    </script>
</body>
</html>