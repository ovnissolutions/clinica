<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <link rel="stylesheet" href="css/style_login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
  <h1 class="titulo">Clinica Fisioterapia</h1>
  
  <div class="container">
    <div class="login-box">
      <h1 class="titulo1">Seja Bem Vindo</h1>
      <form class="login-form" action='autenticar.php'  method="post">
        <input type="text" name="email" placeholder="Usuário" id='email'>
        <input type="password" name="senha" placeholder="Senha" id='senha'>
        <button type="submit">Entrar</button>
      </form>
    </div>
  </div>
</body>
</html>
