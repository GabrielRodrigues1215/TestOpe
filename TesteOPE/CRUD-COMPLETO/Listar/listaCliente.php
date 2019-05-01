<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
		<h1>Listar Usuário</h1>
		<!-- PESQUISAR DENTRO DO IFRAME -->
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
		<!-- FINALIZAR PESQUISAR IFRAME -->
		

		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		//paginação 
		//receber o numero da pagina
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

		//setar a quantidade de itens por pagina
		$qnt_result_pg = 2;

		//calcular o inicio da visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;


		//select de consulta
		$consulta_usuario = "SELECT * FROM Cad_CLiente LIMIT $inicio, $qnt_result_pg";
		$resultado_consulta = mysqli_query($conn, $consulta_usuario);

		while($row_usuario = mysqli_fetch_assoc($resultado_consulta )){
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
		//paginaçao - somar a quantidade de usuarios

		$result_pg = "SELECT COUNT(id) AS num_result FROM Cad_CLiente";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg =  $resultado_pg-> fetch_assoc();
		//echo $row_pg['num_result'];
		//Quantidade de pagina
		$quantidade_pg = ceil($row_pg['num_result']/ $qnt_result_pg);

		//limitar os links antes depois	
		$max_links = 2;
		echo "<a href='listaCliente.php?pagina=1'>Primeira </a>";
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina -1; $pag_ant++ ){
			if($pag_ant >= 1){
				echo "<a href='listaCliente.php?pagina=$pag_ant'>$pag_ant </a>";
			}
		}
		echo "$pagina";

		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='listaCliente.php?pagina=$pag_dep' >$pag_dep </a>";
			}

		}

		echo "<a href='listaCliente.php?pagina=$quantidade_pg'>Ultima </a>";

		?>
	</body>
</html>