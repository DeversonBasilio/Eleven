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
		<script type="text/javascript">
			$(document).ready(function (){
				$('.btn-success').click(function(){					
					if(	$('#ipt_CODEmpresa').val() == "" || 
						$('#ipt_Especie').val() == ""  ||
						$('#ipt_Vencimento').val() == ""  ||
						$('#ipt_Titulo').val() == ""  ||
						$('#ipt_Valor').val() == ""  )
					{ 
						alert("H? campos que precisam ser preenchidos");
					}
					else
					{							
						var params = { 	'COD_Empresa': $('#ipt_CODEmpresa').val(),
										'Especie': $('#ipt_Especie').val(),
										'Vencimento': $('#ipt_Vencimento').val(),
										'NTitulo': $('#ipt_Titulo').val(),
										'Valor': $('#ipt_Valor').val()
									};
						$.ajax({
							type: 'POST',
							url: "php/Titulos_insert.php",
							data: params,
							datatype: "html",
							success: function(data) { alert(data); }
						});
					}
				});
			});
		</script>
	</head>
	<body>	
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="../index.php">Home</a></li>
					<li class="dropdown active">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="Borderos.php">Borderos</a></li>
							<li><a href="Despesas.php">Despesas</a></li>
							<li><a href="Empresas.php">Empresas</a></li>
							<li><a href="Titulos.php">Titulos</a></li>							
						</ul> <!-- dropdown-menu -->
					</li>
					<li class="dropdown">
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
			<div class="container-fluid">
			<form method="post" name="form">
				<div class="input-group input-group-lg" style="margin-top:1%;">
					<span class="input-group-addon" id="sizing-addon1">Empresas</span>
					<input type="text" class="form-control" name="RazaoSocial"  id="ipt_CODEmpresa" required>
				</div>
				<div>
					<div class="input-group input-group-lg" style="margin-top:1%;">
						<span class="input-group-addon" id="sizing-addon1">Especie</span>
						<input type="text" class="form-control" name="Especie"  id="ipt_Especie" required>
					</div>
					<div class="input-group input-group-lg" style="margin-top:1%;">
						<span class="input-group-addon" id="sizing-addon1">Vencimento</span>
						<input type="text" class="form-control" name="Vencimento"  id="ipt_Vencimento" required>
					</div>
				</div>
				<div>
					<div class="input-group input-group-lg" style="margin-top:1%;">
						<span class="input-group-addon" id="sizing-addon1">N? do Titulo</span>
						<input type="text" class="form-control" name="Especie"  id="ipt_Titulo" required>
					</div>
					<div class="input-group input-group-lg" style="margin-top:1%;">
						<span class="input-group-addon" id="sizing-addon1">Valor</span>
						<input type="text" class="form-control" name="Vencimento"  id="ipt_Valor" required>
					</div>
				</div>
				<div class="input-group input-group-lg" style="margin-top:1%;">
					<button type="submit" class="btn btn-lg btn-success">Confirmar</button>
				</div>
			</form>
		</div>
	</body>
</html>