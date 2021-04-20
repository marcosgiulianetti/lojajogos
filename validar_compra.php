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

        <form class="form-signin" action="comprar.php" method="POST">

            <img src="img/icon.svg" class="mb-4" style="max-width: 150px; max-height: 150px;" />
            <h1 class="h3 mb-3 font-weight-normal">Finalize sua Compra</h1><br>
            <h4>Meio de Pagamento</h4>
            <input type="radio" name="credito"  value="creditCard"> Cartão de Crédito<br>
            <input type="radio" name="boleto"  value="boleto"> Boleto <br>
            <input type="radio" name="debito"  value="deb"> Débito Online <br><br>
         
           

            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Comprar" /><br>

        </form>


        <p class="mt-5 mb-3 text-muted">Fatec Cruzeiro-SP 2020</p>

    </section>

</body>

</html>