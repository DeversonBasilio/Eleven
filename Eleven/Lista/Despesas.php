<!DOCTYPE html>
<html>
	<?php		
		require_once('..\conexao.php');
	?>
	<head>
		<meta charset="UTF-8">
		<title>Eleven</title>
		<link href="../imports/css/bootstrap.min.css" rel="stylesheet">
		<script src="../imports/js/jquery-2.2.4.min.js" type="text/javascript"></script>
		<script src="../imports/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body>	
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="../index.php">Home</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="Borderos.php">Borderos</a></li>
							<li><a href="Despesas.php">Despesas</a></li>
							<li><a href="Empresas.php">Empresas</a></li>
							<li><a href="Titulos.php">Titulos</a></li>							
						</ul> <!-- dropdown-menu -->
					</li>
					<li class="dropdown active">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Listar
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="../Lista/Borderos.php">Borderos</a></li>
							<li><a href="../Lista/Despesas.php">Despesas</a></li>
							<li><a href="../Lista/Empresas.php">Empresas</a></li>
							<li><a href="../Lista/Titulos.php">Titulos</a></li>							
						</ul> <!-- dropdown-menu -->
					</li>
				</ul> <!-- nav navbar -->
			</div> <!-- container-fluid -->
		</nav>
		<div class="container-fluid">
		
		</div>
	</body>
</html>
