<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Pesquisar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		
		<h1>Pesquisar Usuário</h1>
		
		<form method="POST" action="">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome"><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar">
		</form><br><br>
		
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM Cad_CLiente WHERE nome LIKE '%$nome%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
                echo "ID: " . $row_usuario['id'] . "<br>";
                echo "Nome: " . $row_usuario['nome'] . "<br>";
                echo "Cpf: " . $row_usuario['cpf'] . "<br>";
                echo "Endereço: " . $row_usuario['endereco'] . "<br>";
                echo "Cidade: " . $row_usuario['cidade'] . "<br>";
                echo "Cep: " . $row_usuario['cep'] . "<br>";
                echo "Modelo: " . $row_usuario['modeloCarro'] . "<br>";
                echo "Placo Do Carro: " . $row_usuario['placaCarro'] . "<br>";
                echo "Cor Carro: " . $row_usuario['CorCarro'] . "<br> <hr>";
                echo "<a href='editaCliente.php?id=" . $row_usuario['id'] . "'>Editar </a><br> <hr>";
                echo "<a href='proc_apaga_usuario.php?id=" . $row_usuario['id'] . "'>Apagar </a><br> <hr>";
			}
		}
		?>
	</body>
</html>