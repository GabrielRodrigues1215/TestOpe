<?php
session_start();
?>
<!DOCTYPE html>

<html lang="pt-br">
<script src="https://unpkg.com/vue"></script>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Mechanical System</title>
  <link rel="shortcut icon" href="img/logoICO.ico" type="image/x-icon" />

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.css" rel="stylesheet">

</head>
<div id="app">

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-menu fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Menu</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/test.jpeg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Inici">inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#CadCli">Cadastro Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#CadFun">Cadastro Funcionario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Consulta">Consulta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Relatorio">Relatório</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Orcamento">Orçamento</a>
          </li>

        </ul>
      </div>
    </nav>
    
    <div class="container-fluid p-0" id="html">
      <section class="resume-section p-3 p-lg-5 d-flex" id="Inici">
          <div class="w-100">
            <h2 class="mb-5">inicial:
            </h2>
            
      </section>
      
      <section class="resume-section p-3 p-lg-5 d-flex" id="CadCli">
        <div class="w-100">
          <h2 class="mb-5">Cadastro Cliente:
          </h2>
          <?php
              if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }
            ?>
          <div class="subheading mb-5">
          </div>
          <form action="config.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNome">Nome Completo:</label>
                <input type="text" class="form-control" placeholder="Digite seu Nome" name="inputNome">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCpf">CPF:</label>
                <input type="cpf" class="form-control" id="inputCpf" placeholder="Digite seu CPF" name="inputCpf">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Digite seu Endereço" name="inputAddress">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Digite sua Cidade" name="inputCity">
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
                <input type="text" class="form-control" id="inputCEP" placeholder="Digite seu CEP" name="inputCEP">
              </div>
            </div>
        
            <hr>
            
            <input type="checkbox" v-model="car">Adicionar carro dependente
            <br>
            <br>
            <p v-if="!car"></p>
            <footer v-show="car">
               <label>Modelo do Carro: </label> 
                <input  type="text" name="ModCarro" id="ModCarro">
                <label>Placa: </label> 
                <input  type="text" name="PlacaCarro" id="PlacaCarro">
                <label>Cor:</label>
                <input  type="text" name="CorCarro" id="CorCarro"><br />
              </footer>
            <br>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
         
        </div>
      </section>
              
      <hr class="m-0">
      <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="CadFun">
        <div class="w-100">
          <h2 class="mb-5">Cadastro Funcionario:
          </h2>
          <?php
              if(isset($_SESSION['msg2'])){
                echo $_SESSION['msg2'];
                unset($_SESSION['msg2']);
              }
            ?>

          <form action="config2.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Nome Completo:</label>
                <input type="text" class="form-control"  placeholder="Digite seu Nome" name="inputNomefun">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCpf">CPF:</label>
                <input type="cpf" class="form-control"  placeholder="Digite seu CPF" name="inputCpffun">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" placeholder="Digite o endereço" name="inputAddressfun">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control"  name="inputCityfun">
              </div>
              <div class="form-group col-md-2">
                <label for="Telefone">Telefone</label>
                <input type="text" class="form-control"  name="inputTelefonefun">
              </div>
              <div class="form-group col-md-2">
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control"  name="inputCEPfun">
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>

      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="Consulta">
        <div class="w-100">
          <h2 class="mb-5">Consulta</h2>

          
            
              <div class="row">
                <div class="col" id='CadastroCliente'>
          <input type="button" class="btn btn-primary btn-block"  value="Consulta Clientes"
                  onclick="myFunction()">     
                <div id='demo'>
                </div>
                </div>
                <div class="col" id='CadastroFuncionario'>
          <input type="button" class="btn btn-primary btn-block"  value="Consulta Funcionario"
                  onclick="myFunction2()">     
                <div id='demo2'>
                </div>
                </div>

              </div>

        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="Relatorio">
        <div class="w-100">
          <h2 class="mb-5">Relatorio</h2>

        </div>
      </section>


      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="Orcamento">
        <div class="w-100">
          <h2 class="mb-5">Orçamento </h2>

        </div>
      </section>

    </div>
</div>
<script>

    new Vue({
        el: '#app',
        data() {
          return {
            car: false,
          }  
        },
    })
</script>
<script>
  	function myFunction(){
    var x = document.getElementById('demo').innerHTML ="<iframe src='listaCliente.php' width='510px' height='600px'></iframe>"
    }
    function myFunction2(){
      var y = document.getElementById('demo2').innerHTML ="<iframe src='listaFuncionario.php' width='510px' height='600px' ></iframe>"
    }
</script>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/resume.min.js"></script>

</body>

</html>