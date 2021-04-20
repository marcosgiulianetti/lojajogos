<?php

if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['cpf']) && !empty($_POST['cpf']) && isset($_POST['password']) && !empty($_POST['password'])){

    require 'conexao.php';
    require 'classes/user.class.php';

    $u = new User();

    $name = addslashes($_POST['name']);
    $username = addslashes($_POST['username']);;
    $email = addslashes($_POST['email']);;
    $cpf = addslashes($_POST['cpf']);;
    $password = addslashes($_POST['password']);;

    echo "Nome de usuário: ".$name;

    $u->CreateAccount($name, $username, $email, $cpf, $password);

    header("Location: login.php");

}else{
    header("Location: cadastro_usuario.php");
}