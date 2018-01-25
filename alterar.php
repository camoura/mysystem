<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/signin.css" rel="stylesheet">
        <script type="text/javascript" src="js/btnupdate.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Alterar</title>
    </head>
    <body>
        
   

<?php
require "conecta.php";
$pdo=conexao();
$idcliente=$_GET['id'];
//var_dump($idcliente);
$sql= "SELECT * FROM clientes WHERE idcliente=$idcliente";
    $funfis=$pdo->prepare($sql);
    $funfis->execute(array($sql));
    $res=$funfis->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($res);
    
    foreach($res as $row)
{
  echo ' 
  <div class="container">
  <form class="form-signin"  method="POST" action="alterar_proc.php">
  <input type="hidden" name="idcliente" id="idcliente" value=',$row['idcliente'],'>
  <label for="nome">NOME</label>
  <input type="text" name="nome" id="nome" class="form-control" value="',$row['nome'],'">
  <label for="endereco">ENDEREÇO</label>
  <input type="text" name="endereco" id="endereco" class="form-control" value="',$row['endereco'],'">  
  <label for="nome">CPF</label>
  <input type="text" name="cpf" id="cpf" class="form-control" value="',$row['cpf'],'"> 
  <label for="nome">TELEFONE</label>
  <input type="text" name="telefone" id="telefone" class="form-control" value="',$row['telefone'],'">
  <label for="nome">EMAIL</label>
  <input type="text" name="email" id="email" class="form-control" value="',$row['email'],'"></br>
  <button class="btn btn-lg btn-primary btn-block" id="btn" onclick="btnupd()" type="submit">Salvar</button>
  
  </form>    
</div>';
}
?>




</body>
    </html>
   