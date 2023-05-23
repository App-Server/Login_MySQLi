<?php

    include('security.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h5>Seja Bem vindo,</h3>
    <h2><?php echo $_SESSION['nome']?></h2>
</body>
</html>