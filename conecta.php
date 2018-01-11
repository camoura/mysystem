<?php
function conexao(){
try {
    $con= new PDO("mysql:host=localhost;dbname=mysystem","root","123");
}
catch (PDOException $erro ){
    echo "Erro ao tentar se conectar ao DB" . $erro->getMessage();
    //echo $erro->getCode();  ---->Mostra somente o código do erro
}
return $con;
}