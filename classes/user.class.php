<?php

class User
{

    public function GetId($username, $password)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT id FROM usuario WHERE username = '$username' AND password = '$password'");
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);

        $id = implode(" ", $result);

        return $id;
    }

    public function TypeOfAccount($username, $password)
    {
        global $pdo;
        $u = new User();

        $id = $u->GetId($username, $password);

        $sql = $pdo->prepare("SELECT permission FROM usuario WHERE id = '$id'");
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);

        $permission = implode(" ", $result);

        return $permission;
    }

    public function CreateAccount($name, $username, $email, $cpf, $password)
    {
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO usuario (username, password, permission) VALUES ('$username', '$password', 0);");
        $sql->execute();

        $sql = $pdo->prepare("INSERT INTO cliente (name, email, cpf) VALUES ('$name', '$email', '$cpf');");
        $sql->execute();
    }

    public function ShowUsers()
    {
        global $pdo;

        $sql = $pdo->query("SELECT * FROM usuario");

        echo "<table width='100%' border='1' cellpadding='5' cellspacing='5'>
            <tr>
                <td> ID </td>
                <td> Username </td>
                <td> Password </td>
                <td> Permission </td>
            </tr>";
        while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
            echo "
                <tr>
                    <th>" . $row->id . "</th>
                    <th>" . $row->username . "</th>
                    <th>" . $row->password . "</th>
                    <th>" . $row->permission . "</th>
                </tr><br>
            ";
        }
        echo "</table>";
    }

    public function ShowEspecificUser($id)
    {
        if ($id != null) {
            global $pdo;

            $sql = $pdo->query("SELECT * FROM usuario WHERE id = $id");

            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $permissao = '';

                if ($row->permission == 0) {
                    $permissao = 'Conta comum';
                } else {
                    $permissao = 'Administrador';
                }

                echo "
                <form action='validar_editar_contas.php' method='POST'>
    
                <div class='mb-3'>
                    <br><br>
                    ID do usuário<input type='text' class='form-control' name='idUser' value='" . $row->id . "'><br>
                    Nome de usuário<input type='text' class='form-control' name='username' value='" . $row->username . "'><br>
                    Senha<input type='text' class='form-control' name='password' value='" . $row->password . "'><br>
                    Permissão<input type='text' class='form-control' name='permission' value='" . $permissao . "'><br>
                </div>
    
                <hr class='mb-4'>
                <input type='submit' name='alterRow' value='Alterar' class='btn btn-primary btn-lg btn-block'><br>            
                </form>
                ";
            }
        }
    }

    public function ChangePermission($id)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT permission FROM usuario WHERE id = $id");
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        $valuePermission = implode(" ", $result);

        echo "<script>console.log('cheguei aqui e o valor do id é igual a $id');</script>";

        if ($valuePermission == 0) {
            $sql = $pdo->prepare("UPDATE usuario SET permission = 1 WHERE id = $id");
            $sql->execute();
        } else {
            $sql = $pdo->prepare("UPDATE usuario SET permission = 0 WHERE id = $id");
            $sql->execute();
        }
    }

    public function DoChanges($id, $username, $password)
    {
        global $pdo;

        $sql = $pdo->prepare("UPDATE usuario SET username = '$username', password = '$password' WHERE id = $id");
        $sql->execute();
    }
}
