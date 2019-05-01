<?php
session_start();
include_once("conexao.php");

$id = $_POST['id'];
$name = $_POST['inputNomefun'];
$cpf = $_POST['inputCpffun'];
$endereco = $_POST['inputAddressfun'];
$cidade = $_POST['inputCityfun'];
$telefone = $_POST['inputTelefonefun'];
$cep = $_POST['inputCEPfun'];


$sql = "UPDATE Cad_FUncionario SET nome = '$name',
cpf= '$cpf',endereco = '$endereco',cidade = '$cidade',telefone ='$telefone',
cep = '$cep', modified=NOW() WHERE id = '$id'";

$resultado_usuario = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Funcionario editado com sucesso</p>";
    header("Location: listaFuncionario.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Funcionario não foi editado com sucesso</p>";
    header("Location: editaFuncionario.php?id=$id");
}
?>