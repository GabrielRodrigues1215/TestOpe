<?php
$servername = "localhost";
$username = "id9421485_adim";
$password = "123456";
$dbname = "id9421485_testbd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
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
if ($conn->query($sql) === TRUE) {
    header('Location: https://testope.000webhostapp.com/menu.html'); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>