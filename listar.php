<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">
  <title>Listar</title>
</head>
<body>
<div class="table-responsive">
<table class="table table-hover small">
  
  <thead>
  <tr>
  <th>Nome</th>
  <th>Endereço</th>
  <th>CPF</th>
  <th>Telefone</th>
  <th>Email</th>
  </tr>
  </thead>


<?php
require "conecta.php";
//require "cadastrar.php";

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
  <td>',$row['nome'],'</td>
  <td>',$row['endereco'],'</td>
  <td>',$row['cpf'],'</td>
  <td>',$row['telefone'],'</td>
  <td>',$row['email'],'</td>
  <td><button type="button" class="btn btn-primary">Alterar</button></td>
  <td><button type="button" class="btn btn-danger">Excluir</button></td>
  </tr>
</tbody>';
  }

?>

</table>
  </body>
  </html>




<?php
/*try {
    $query = $bd->prepare($sql);
    $query->execute(Array(':nome' => $busca));
    $res = $query->fetchAll(PDO::FETCH_NUM);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  '<ul>
  <li><strong>Nome: ', $row['nome'], '</strong></li>
  <li><strong>Endereço: ', $row['endereco'], '</strong></li>
  <li><strong>CPF: ', $row['cpf'], '</strong></li>
  <li><strong>Telefone: ', $row['telefone'], '</strong></li>
  <li><strong>Email: ', $row['email'], '</strong></li>
  </ul>';

  <td>Nome: ', $row['nome'], '</td>
  <td>Endereço: ', $row['endereco'], '</td>
  <td>CPF: ', $row['cpf'], '</td>
  <td>Telefone: ', $row['telefone'], '</td>
  <td>Email: ', $row['email'], '</td>

try {
  $listar=$pdo->query('SELECT * FROM clientes');
  $listar->execute();

  if ($listar -> rowCount() > 0):
    return $listar->fetchAll(PDO::FETCH_ASSOC);
    var_dump($listar);
  endif;
}
catch (PDOException $erro ){
  echo "Erro ao tentar se conectar ao DB" . $erro->getMessage();
}

  */



?>