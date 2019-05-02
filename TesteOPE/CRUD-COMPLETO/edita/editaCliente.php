<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM Cad_CLiente WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = $resultado_usuario -> fetch_assoc();
?>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
  <div class="mx-auto " style="width:400px">
		<h3>Editar Usuário</h3>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form action="proc_edit_usuario.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNome">Nome Completo:</label>

                <input type="hidden"  name="id" value="<?php echo $row_usuario['id'];?>">


                <input type="text" class="form-control" placeholder="Digite seu Nome" name="inputNome"
                value="<?php echo $row_usuario['nome'];?>">

              </div>
              <div class="form-group col-md-6">
                <label for="inputCpf">CPF:</label>
                <input type="cpf" class="form-control" id="inputCpf" placeholder="Digite seu CPF" name="inputCpf"
                value="<?php echo $row_usuario['cpf'];?>">

              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Digite seu Endereço" name="inputAddress"
              value="<?php echo $row_usuario['endereco'];?>">

            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Digite sua Cidade" name="inputCity"
                value="<?php echo $row_usuario['cidade'];?>">

              </div>
              <div class="form-group col-md-4">
                <label for="inputEstado">Estado</label>
                <select id="inputEstado" class="form-control">
                  <option selected>Escolher...</option>
                  <option >SP</option>
                  <option>RJ</option>
                  <option>SC</option>
                  <option>MG</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control" id="inputCEP" placeholder="Digite seu CEP" name="inputCEP"
                value="<?php echo $row_usuario['cep'];?>">
              </div>
              <hr>

              <div class="form-group col-md-2">
              <label for="ModeloCarro">Modelo do Carro</label>
                <input class="form-control" type="text" name="ModCarro" id="ModCarro"
                value="<?php echo $row_usuario['modeloCarro'];?>">
              </div>


              <div class="form-group col-md-2">
              <label for="Placa">Placa</label>
                <input class="form-control" type="text" name="PlacaCarro" id="PlacaCarro"
                value="<?php echo $row_usuario['placaCarro'];?>">
              </div>

              <div class="form-group col-md-2">
              <label for="Placa">Cor</label>
                <input class="form-control" type="text" name="CorCarro" id="CorCarro"
                value="<?php echo $row_usuario['CorCarro'];?>"><br />
              </div>
            </div>
        
            
            <br>
            <button type="submit" class="btn btn-primary">Editar</button>
          </form>
          </div>
	</body>
</html>