<?php

class Game{

    public function CreateGame($name, $description, $stock, $price){
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO jogos (name, description, stock, price) VALUES ('$name', '$description', $stock, $price);");
        $sql->execute();
    }

    public function UpdateStock($id, $stock){
        global $conn;
        

        $qtd=$stock;
        $qtd--;

        echo $qtd;
    }
}
