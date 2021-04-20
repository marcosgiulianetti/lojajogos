<?php
require 'conexao2.php';
require 'classes/game.class.php';

    $id = $_POST['id'];
    $stock = $_POST['stock'];
    
    if(isset($_POST['comprar'])){
        $g=new Game($id,$stock);
    }

?>