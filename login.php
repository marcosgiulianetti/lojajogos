<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Biblioteca do Bootstrap | CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Jquery -->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>

    <!-- Biblioteca do Bootstrap | JS -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Custom style -->
    <link href="css/singin.css" rel="stylesheet">

    <title>Login</title>

</head>

<body class="text-center">

    <section>

        <form class="form-signin" action="validar_login.php" method="POST">

            <img src="img/icon.svg" class="mb-4" style="max-width: 150px; max-height: 150px;" />
            <h1 class="h3 mb-3 font-weight-normal">Entre em sua conta</h1>
            <label for="inputUsername" class="sr-only">Nome de usuario</label>
            <input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="Nome de usuario" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>

            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Entrar" /><br>

        </form>

        <a href="cadastro_usuario.php">Não possui conta? Cadastre-se</a>

        <p class="mt-5 mb-3 text-muted">Fatec Cruzeiro-SP 2020</p>

    </section>

</body>

</html>