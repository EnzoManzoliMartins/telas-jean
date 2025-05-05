<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link rel="stylesheet" href="cadastro.css">
</head>
<body>
  <div class="register-container">
    <h2>Criar Conta</h2>

    <!-- Mensagens -->
    <p id="mensagem-sucesso" style="display:none; color:green;">Cadastro realizado com sucesso!</p>
    <p id="mensagem-erro" style="display:none; color:red;"></p>

    <!-- Formulário com ID para JS -->
    <form id="register-form" action="../controller/Cadastrocontroller.php" method="POST">
      <div class="form-group">
        <input type="text" name="nome" placeholder="Nome completo" required>
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="E-mail" required>
      </div>
      <div class="form-group">
        <input type="password" name="senha" placeholder="Senha" required>
      </div>
      <div class="form-group">
        <input type="password" name="confirmar_senha" placeholder="Confirmar senha" required>
      </div>

      <button type="submit">Cadastrar</button>
    </form>
    <a href="login.php">Já tem conta? Faça login</a>
  </div>

  <script>
    window.addEventListener('DOMContentLoaded', function() {
      const urlParams = new URLSearchParams(window.location.search);
      const erro = urlParams.get('erro');
      const sucesso = urlParams.get('sucesso');

      const mensagemErro = document.getElementById('mensagem-erro');
      const mensagemSucesso = document.getElementById('mensagem-sucesso');

      if (erro) {
        mensagemErro.textContent = erro;
        mensagemErro.style.display = 'inline';
      }

      if (sucesso) {
        mensagemSucesso.style.display = 'inline';
      }

      setTimeout(() => {
        mensagemErro.style.display = 'none';
        mensagemSucesso.style.display = 'none';
      }, 2000);
    });
  </script>
</body>
</html>
