<?php
include_once "../php/conexao.php";

try{
    $email=$_POST('email');
    $nome=$_POST('name');
    $endereco=$_POST('adress');
    $cep=$_POST('cep');
    $cidade=$_POST('city');
    $estado=$_POST('state');

    echo "<br>".$email;
    echo "<br>".$nome;
    echo "<br>".$endereco;
    echo "<br>".$cep;
    echo "<br>".$cidade;
    echo "<br>".$estado;

    $sql=$conectar -> prepare("INSERT INTO pdo.CLIENTE (emailCliente, nomeCLiente, 'enderecoCliente', cepCliente, cidadeCliente, estadoCliente) VALUES('$email', '$nome', '$endereco', '$cep', '$cidade', '$estado')");

    $sql -> execute();
    header('location: index.php');
}catch(PDOException $e){
    echo("falha ao conectar" .$e-> getMessage());
}
?>