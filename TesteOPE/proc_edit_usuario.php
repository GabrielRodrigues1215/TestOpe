<?php
session_start();
include_once("conexao.php");

$id = $_POST['id'];
$name = $_POST['inputNome'];
$cpf = $_POST['inputCpf'];
$endereco = $_POST['inputAddress'];
$cidade = $_POST['inputCity'];
$cep = $_POST['inputCEP'];
$modeloCarro = $_POST['ModCarro'];
$placaCarro = $_POST['PlacaCarro'];
$CorCarro = $_POST['CorCarro'];

$sql = "UPDATE Cad_CLiente SET nome = '$name',
cpf= '$cpf',endereco = '$endereco',cidade = '$cidade',
cep = '$cep',modeloCarro = '$modeloCarro',PlacaCarro ='$placaCarro',
CorCarro = '$CorCarro', modified=NOW() WHERE id = '$id'";

$resultado_usuario = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuario editado com sucesso</p>";
    header("Location: listaCliente.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuario não foi editado com sucesso</p>";
    header("Location: editaCliente.php?id=$id");
}
?>