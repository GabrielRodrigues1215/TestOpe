<?php
session_start();
include_once("conexao.php");

$name = $_POST['inputNomefun'];
$cpf = $_POST['inputCpffun'];
$endereco = $_POST['inputAddressfun'];
$cidade = $_POST['inputCityfun'];
$telefone = $_POST['inputTelefonefun'];
$cep = $_POST['inputCEPfun'];


$sql = "INSERT INTO Cad_FUncionario(nome,cpf,endereco,cidade,telefone,cep)
VALUES ('$name','$cpf','$endereco','$cidade','$telefone','$cep')";

$resultado_usuario = mysqli_query($conn,$sql);

if(mysqli_insert_id($conn)){
    $_SESSION['msg2'] = "<p style='color:green;'>Funcionario cadastrado com sucesso</p>";
    header("Location: https://testope.000webhostapp.com/menu.php");
}else{
    $_SESSION['msg2'] = "<p style='color:red;'>Funcionario não foi cadastrado com sucesso</p>";
    header("Location: https://testope.000webhostapp.com/menu.php");
}
?>