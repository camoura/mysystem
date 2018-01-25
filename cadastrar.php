<?php
 require "conecta.php";
 
 $pdo= conexao();

 $sql= "INSERT INTO clientes (nome,endereco,cpf,telefone,email) VALUES (:nome,:endereco,:cpf,:telefone,:email)";
 $funfis= $pdo->prepare($sql);
 $funfis->bindParam(':nome',$_POST['nome'],PDO::PARAM_STR);
 $funfis->bindParam(':endereco',$_POST['endereco'],PDO::PARAM_STR);
 $funfis->bindParam(':cpf',$_POST['cpf'],PDO::PARAM_STR);
 $funfis->bindParam(':telefone',$_POST['telefone'],PDO::PARAM_STR);
 $funfis->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
 $funfis->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">
    <title>MYSYSTEM</title>
</head>
<body>
    <h1 align="center">Bem-vindo ao Mysystem !</h1>
    <form class="form-signin"  action="listar.php" method="post">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Listar</button>
    </form>
</body>
</html>

