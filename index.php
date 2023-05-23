<?php

    include('config.php');

    if(isset($_POST['email']) || (isset($_POST['senha']))) {

        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu email";
        }else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM tb_tech WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Fallha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: painel.php");

            } else {
                echo "Falha ao logar! email ou senha incorretos";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            text-align: center;
            background-color: #A9A9A9;
        }

        .field{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Tech</h2>
    <div>
        <form action="" method="post">
            <input type = "email" class="field" name ="email" placeholder="email" required =""><br>
            <input type = "password" class="field" name ="senha" placeholder="senha" require =""><br>
            <input type= "submit" class="field" name ="login" value= "Login">
        </form>
    </div>
</body>
</html>