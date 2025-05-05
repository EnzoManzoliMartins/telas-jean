<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="login-container">
    <h2>Entrar</h2>
    
    <form id="login-form" action="../controller/logincontroller.php" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <label>
        <input type="checkbox" name="lembrar"> Lembrar-me
      </label>
      <button type="submit">Entrar</button>
    </form>

    <span id="mensagem-sucesso" class="sucesso" style="display: none;">
      Login feito com sucesso!
    </span>

    <span id="mensagem-erro" class="erro" style="color: red; display: none;">
    </span>

    <a href="recuperacao-de-senha.php">Recuperação de senha</a><br>
    <a href="cadastro.php">Criar nova conta</a>
  </div>

  <script>
    document.getElementById('login-form').addEventListener('submit', function(event) {
      event.preventDefault(); 

      const mensagem = document.getElementById('mensagem-sucesso');
      mensagem.style.display = 'inline'; 

      const mensagemErro = document.getElementById('mensagem-erro');
      const urlParams = new URLSearchParams(window.location.search);
      const erro = urlParams.get('erro');
      
      if (erro) {
        mensagemErro.innerHTML = erro;
        mensagemErro.style.display = 'inline';
      }

      setTimeout(function() {
        mensagem.style.display = 'none';
      }, 2000);
    });
  </script>
</body>
</html>
