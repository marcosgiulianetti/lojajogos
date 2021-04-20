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
    <link href="css/form-validation.css" rel="stylesheet">

    <title>Login</title>

</head>

<body class="bg-light" style="text-align: center;">

    <div class="container">

        <!-- Espaçamento -->
        <br><br><br><br>

        <div class="row">

            <div class="col-md-12 order-md-1">

                <img src="img/icon.svg" class="mb-4" style="max-width: 150px; max-height: 150px;" />

                <h4 class="mb-3">Cadastrar novo Jogo</h4><br>

                <form action="validar_cadastro_jogo.php" class="needs-validation" method="POST">

                    <div class="mb-3">
                        <label for="firstName">Título do jogo</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Título do jogo" value="" required>
                        <div class="invalid-feedback">
                            Este campo é obrigatório!
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="gameDescription">Descrição do Jogo</label>
                        <textarea name="gameDescription" id="gameDescription" cols="30" rows="5" class="form-control" required></textarea>
                        <div class="invalid-feedback">
                            Este campo é obrigatório!
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="gameStock">Quantidade em estoque</label>
                        <input type="number" class="form-control" id="gameStock" placeholder="Quantidade em estoque" value="" required>
                        <div class="invalid-feedback">
                            Este campo é obrigatório!
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="gamePrice">Preço do Jogo</label>
                        <input type="number" class="form-control" id="gamePrice" placeholder="Preço do Jogo" value="" required>
                        <div class="invalid-feedback">
                            Este campo é obrigatório!
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button><br>

                    <a href="index2.php">Voltar</a>

                </form>

            </div>
        </div>

        <!-- Footer que trás a informações sobre os desenvolvedores -->
        <footer class="my-5 pt-5 text-muted text-center text-small col-md-0 order-md-1">
            <p class="mb-3">Fatec Cruzeiro-SP 2020</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Sobre</a></li>
            </ul>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>