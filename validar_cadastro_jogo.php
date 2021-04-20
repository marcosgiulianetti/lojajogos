<?php
    if(isset($_POST['firstName']) && !empty($_POST['firstName']) && isset($_POST['gameDescription']) && !empty($_POST['gameDescription']) && isset($_POST['gameStock']) && !empty($_POST['gameStock']) && isset($_POST['gamePrice']) && !empty($_POST['gamePrice'])){
        require 'conexao.php';
        require 'classes/game.class.php';

        $g = new Game();
        $name = addslashes($_POST['firstName']);
        $description = addslashes($_POST['description']);
        $stock = addslashes($_POST['stock']);
        $price = addslashes($_POST['price']);

        $g->CreateGame($name, $description, $stock, $price);
        header("Location: index2.php");
    }else{
        header("Location: cadastro_jogo.php");
    }
?>