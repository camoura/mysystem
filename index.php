<?php
session_start();
//require "cadastrar.php";
?>
<!DOCTYPE html>
        <html>
    <head>
        <meta charset="UTF-8">
        <title>MYSYSTEM</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/signin.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <form class="form-signin"  method="POST" action="cadastrar.php">
        <label for="nome">NOME</label>
        <input type="text" name="nome" id="nome" class="form-control"> 
        <label for="endereco">ENDEREÇO</label>
        <input type="text" name="endereco" id="endereco" class="form-control">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" class="form-control">
        <label for="telefone">TELEFONE</label>
        <input type="text" name="telefone" id="telefone" class="form-control">
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email" class="form-control"><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >CADASTRAR</button><br>
        <a button type="button" button class="btn btn-lg btn-primary btn-block" href="listar.php">LISTAR</a>
        
        </form>    
    </div>
    








    </body>
        </html>

