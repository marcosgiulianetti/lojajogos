<?php

if (isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['permission']) && !empty($_POST['permission'])) {

    require 'conexao.php';
    require 'classes/user.class.php';
    require 'editar_contas.php';

    $u = new User();

    $id = addslashes($_POST['idUser']);
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    $permission = addslashes($_POST['permission']);

    $u->DoChanges($id, $username, $password);
    //header("Location: editar_contas.php");

} else {
    echo "<script>console.log('cheguei aqui com o endereço de id: $id');</script>";
    //header("Location: editar_contas.php");
}
