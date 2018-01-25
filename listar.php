<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/btndelete.js"></script>
  <title>Listar</title>
</head>
<body>
<div class="table-responsive">
<table class="table table-hover small">
  
  <thead>
  <tr>
  <th>ID</th>
  <th>Nome</th>
  <th>Endereço</th>
  <th>CPF</th>
  <th>Telefone</th>
  <th>Email</th>
  </tr>
  </thead>


<?php
require "conecta.php";


$pdo=conexao();

$sql="SELECT * FROM clientes";
$funfis=$pdo->prepare($sql);
$funfis->execute(array($sql));
$res=$funfis->fetchAll(PDO::FETCH_ASSOC);
//var_dump($res);
  foreach($res as $row)
{
  echo ' 
  <tbody>
  <tr>
  <td>',$row['idcliente'],'</td>
  <td>',$row['nome'],'</td>
  <td>',$row['endereco'],'</td>
  <td>',$row['cpf'],'</td>
  <td>',$row['telefone'],'</td>
  <td>',$row['email'],'</td>
  <td><a button type="button" class="btn btn-primary" href="alterar.php?id=',$_GET=$row['idcliente'],'">Alterar</a></td>
  <td><a button type="button"  class="btn btn-danger" id="btndelete" onclick="btndel()" href="excluir.php?id=',$_GET=$row['idcliente'],'" >Excluir</a>
  </tr>
</tbody>';
  }

?>

</table>
  </body>
  </html>




