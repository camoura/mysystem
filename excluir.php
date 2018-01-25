<?php
require "conecta.php";
$pdo=conexao();
$idcliente=$_GET['id'];
//var_dump($idcliente);


    $sql= "DELETE FROM clientes WHERE idcliente=$idcliente";
    $funfis=$pdo->prepare($sql);
    $funfis->bindValue($idcliente,PDO::PARAM_INT);
    $funfis->execute();

    if($funfis=true){
        header("Location:listar.php");
    }else {
        echo "Erro";
    }
        

    



