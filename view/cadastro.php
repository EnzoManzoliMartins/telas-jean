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
    <form action="../controller/Cadastrocontroller.php"method="POST">
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
      <div class="terms">
        <input type="checkbox" name="termos" required>
        <p >Eu concordo com os Termos de Serviço</p>
      </div>
      <button type="submit">Cadastrar</button>
      
    </form>
    <a href="login.php">
      Já tem conta? Faça login</a>
  </div>
</body>
</html>