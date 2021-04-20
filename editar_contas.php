<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Página inicial - Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <style>
        #alterPermission{
            display: none;
        }
    </style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index2.php">Loja de Jogos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="cadastro_jogo.php">Cadastrar Jogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Editar Jogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Editar Contas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="login.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white">
        <div class="container ">
            <h1>Editar Contas</h1>
            <p class="lead">Nesta página é possível você editar as contas dos usuários</p>
        </div>
    </header>

    <section id="editUsers">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Editar usuário</h2>
                    <p class="lead">Informe o ID do usuário e altere os campos que desejar</p>
                    <form action="" method="POST">
                        <input type="text" name="id" placeholder="ID do usuário">
                        <button type="submit" name="showUser" onclick="ShowAlterPermission()">Buscar usuário</button>
                    </form>
                    <?php
                    require_once 'conexao.php';
                    require_once 'classes/user.class.php';
                    $u = new User();

                    if (isset($_POST['showUser']) && isset($_POST['id'])) {
                        $id = addslashes($_POST['id']);

                        $u->ShowEspecificUser($id);
                    }

                    ?>
                    <form action="" method="POST">
                        <input type='submit' id='alterPermission' name='alterPermission' value='Conceder/Revogar permissão de Administrador' class='btn btn-success btn-lg btn-block' ><br>
                        <input type="text" name="noneUser" id="noneUser" value="<?php echo $id ?>" style="display: none;">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="tableUsers">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Tabela de Usuários</h2>
                    <p class="lead">Na tabela abaixo, está incluso os dados de todos os usuários cadastrados no sistema:</p>
                    <?php
                    require_once 'conexao.php';
                    require_once 'classes/user.class.php';
                    $u = new User();

                    $u->ShowUsers();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

</body>

</html>

<?php

if (isset($_POST['alterPermission'])) {
    require_once 'conexao.php';
    require_once 'classes/user.class.php';

    $u = new User();
    $id = addslashes($_POST['noneUser']);
    if ($id != null) {
        $u->ChangePermission($id);
    }
}else{
}


?>