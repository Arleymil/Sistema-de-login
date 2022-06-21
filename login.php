<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="home.php">Voltar</a>
     <div class="tela-login">
         <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
        <input type="text" name="email" placeholder="Digite seu email">
        <br>
        <br>
        <input type="password" name="senha"  placeholder="Digite sua senha">
        <br>
        <br>
        <input type="submit" value="Entrar" id="inputSubmit" name="submit">
        </form>
    </div>
</body>
</html>