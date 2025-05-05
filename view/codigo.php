<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Código</title>
    <link rel="stylesheet" href="codigo.css">
</head>
<body>
    <div class="container">
        <h1>Confirmação de Código</h1>
        <p>Digite o código que foi enviado para seu e-mail</p>       

        <div class="success-message" id="successMessage">
            Um e-mail com as instruções foi enviado para o endereço fornecido.
        </div>      

        <form id="recoveryForm">
            <div class="form-group">
                <label for="codigo">Código</label>
                <input 
                    type="text" 
                    id="campoNumerico" 
                    name="codigo" 
                    required 
                    placeholder="Coloque o código"
                    maxlength="6">
            </div>
            <button type="submit">Confirmar Código</button>
        </form>

        <div class="login-link">
            <a href="login.php">Voltar ao login</a>
        </div>
    </div>  
</body>
</html>
