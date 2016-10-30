<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Eleven</title>
		<link href="imports/css/bootstrap.min.css" rel="stylesheet">
		<script src="imports/js/jquery-2.2.4.min.js" type="text/javascript"></script>
		<script src="imports/js/jquery.maskedinput.min.js" type="text/javascript"></script>
		<script src="imports/js/bootstrap.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div class="container">
			<h1 style="text-align:center;"><b>Eleven</b></h1>
			
			<hr>
					
			<form action="index.php" method="post" name="formAD">
				
				<h3><b>Efetuar Login</b></h3>
				
				<div class="input-group input-group-lg col-md-4 col-xs-12" style="margin-top:1%;">
					<span class="input-group-addon" id="sizing-addon1">Usuário</span>
					<input type="text" class="form-control col-md-12 col-xs-12" name="usuario"  id="ipt_usuario" required>
				</div>
				
				<div class="input-group input-group-lg col-md-4 col-xs-12" style="margin-top:1%;">
					<span class="input-group-addon" id="sizing-addon1">Senha</span>
					<input type="password" class="form-control col-md-12 col-xs-12" name="senha"  id="ipt_senha" required>
				</div>
				
				<div class="input-group input-group-lg col-md-4 col-xs-12" style="margin-top:1%;">
					<button type="submit" class="btn btn-lg btn-success col-md-12 col-xs-12">Confirmar</button>
				</div>
				
			</form>
<?php
	if ($_POST)
	{
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		   
		//Endereco do servido AD IP ou nome
		$servidor_AD = "192.168.1.18";
		   
		//Domínio
		$dominio = "Vitafor\\";

		// Conexão com servidor AD. 
		$ad = ldap_connect($servidor_AD)
		  or die("Não foi possível conexão com Active Directory!");

		// Versao do protocolo       
		ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
		// Usara as referencias do servidor AD, neste caso nao
		ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
		   
		// Bind to the directory server.
		$bd = ldap_bind($ad, $dominio . $usuario, $senha );
		  //or die("Não foi possível pesquisa no AD. ". $dominio . $usuario);    
		
		if( $bd )
		{
			$_SESSION['funcionario'] = $usuario;
			header("location:menu.php");
		}
		else
		{
			echo "<h3 class=\"bg bg-danger\" style=\"text-align:center;\"><b>Usuário ou Senha Inválidos. </b></h3>";
		}

		//Fecha conexao
		ldap_unbind($ad);
	}
?>

		</div>
	</body>
</html>