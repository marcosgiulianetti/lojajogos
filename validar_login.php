<?php

if (isset($_POST['inputUsername']) && !empty($_POST['inputUsername']) && isset($_POST['inputPassword']) && !empty($_POST['inputPassword'])) {

    require 'conexao.php';
    require 'classes/user.class.php';

    $u = new User();

    $username = addslashes($_POST['inputUsername']);
    $password = addslashes($_POST['inputPassword']);
    $message = "Nome de usuário ou senha incorretos!";

    if($u->TypeOfAccount($username, $password)!=null){
        if($u->TypeOfAccount($username, $password)!=0){
            header("Location: index2.php");
        }else{
            header("Location: index.php");
        }
    }
    else{
        echo "<script type='text/javascript'>alert('$u->validate($username, $password)');
        document.location.href=('login.php');</script>";
    }

} else {
}
