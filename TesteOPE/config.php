<?php
session_start();
include_once("conexao.php");

$name = $_POST['inputNome'];
$cpf = $_POST['inputCpf'];
$endereco = $_POST['inputAddress'];
$cidade = $_POST['inputCity'];
$cep = $_POST['inputCEP'];
$modeloCarro = $_POST['ModCarro'];
$placaCarro = $_POST['PlacaCarro'];
$CorCarro = $_POST['CorCarro'];

$sql = "INSERT INTO Cad_CLiente(nome,cpf,endereco,cidade,cep,modeloCarro,PlacaCarro,CorCarro)
VALUES ('$name','$cpf','$endereco','$cidade','$cep','$modeloCarro','$placaCarro','$CorCarro')";

$resultado_usuario = mysqli_query($conn,$sql);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
    header("Location: https://testope.000webhostapp.com/menu.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuario não foi cadastrado com sucesso</p>";
    header("Location: https://testope.000webhostapp.com/menu.php");
}
?>