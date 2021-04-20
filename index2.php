<?php
	include_once("conexao2.php");
	$result_jogos = "SELECT * FROM jogos";
  $resultado_jogos = mysqli_query($conn, $result_jogos);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Página inicial - Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Loja de Jogos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="cadastro_jogo.php">Cadastrar Jogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Editar Jogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="editar_contas.php">Editar Contas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="login.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Bem-vindo à Loja de Jogos!</h1>
      <p class="lead">Aqui você encontra os seus jogos favoritos pelos melhores preços!</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
       
          <h2>Jogos Disponíveis</h2>
          <div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
						
							</tr>
						</thead>
					
						<tbody>
							<?php while($rows_jogos = mysqli_fetch_assoc($resultado_jogos)){ ?>
								<tr>
									<td><h2><?php echo $rows_jogos['name']; ?></h2></td>
									<td>
										<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_jogos['id']; ?>">Visualizar</button>
										<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#comp<?php echo $rows_jogos['id']; ?>">Comprar</button>
									
									
									</td>
								</tr>
								<!-- Inicio Modal Visualizar -->
								<div class="modal fade" id="myModal<?php echo $rows_jogos['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"></h4>
											</div>
											<div class="modal-body">
												
                      <h2><?php echo $rows_jogos['name']; ?></h2>
												<p><?php echo "Descrição do Jogo: ".$rows_jogos['description']; ?></p>
												<p><?php echo "Valor: R$".$rows_jogos['price']; ?></p>
												<p><?php echo "Quantidade no Estoque: ".$rows_jogos['stock']; ?></p>

                       
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->


								<!-- Inicio Modal Comprar -->
								<div class="modal fade" id="comp<?php echo $rows_jogos['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"></h4>
											</div>
											<div class="modal-body">
                      <form action="compra" method="POST">
                      <?php $rows_jogos['id']; ?>
												<h2><?php echo $rows_jogos['name']; ?></h2>
												<p><?php echo "Que bom que está adquirindo um de nossos produtos!!!"; ?></p>
												<p><?php echo "Você pagará o valor de R$".$rows_jogos['price']; ?></p>
												<?php $rows_jogos['stock']; ?>			
												<p><?php echo "Deseja confirmar a compra?" ?>
                     
                   	<p><a href="validar_compra.php"  class="btn btn-primary" role="button" value="comprar">Comprar</a></form>
                    
                      
											</div>
										</div>
									</div>
								</div>							

								<!-- Fim Modal -->

							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        
        </div>
      </div>
    </div>
  </section>



  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
