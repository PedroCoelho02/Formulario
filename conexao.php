<?php 
try{
    $conectar = new PDO ("mysql:host=localhost;port:3306;dataname=pdo","root","");

    echo("conectado com sucesso");
}catch(PDOException $e){
    echo("falha ao conectar" .$e->getMessage());
}
?>