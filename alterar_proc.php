<?php
 require "conecta.php";
 $pdo= conexao();
 
 $sql= "UPDATE clientes SET nome=:nome,endereco=:endereco,cpf=:cpf,telefone=:telefone,email=:email WHERE idcliente=:idcliente";
 $funfis= $pdo->prepare($sql);
 $funfis->bindParam(':nome',$_POST['nome'],PDO::PARAM_STR);
 $funfis->bindParam(':endereco',$_POST['endereco'],PDO::PARAM_STR);
 $funfis->bindParam(':cpf',$_POST['cpf'],PDO::PARAM_STR);
 $funfis->bindParam(':telefone',$_POST['telefone'],PDO::PARAM_STR);
 $funfis->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
 $funfis->bindParam(':idcliente',$_POST['idcliente'],PDO::PARAM_INT);
 $funfis->execute();

 if($funfis=true){
    header("Location:listar.php");
}else {
    echo "Erro";
}
    
?>
