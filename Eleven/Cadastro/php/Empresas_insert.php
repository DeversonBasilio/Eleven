<?php
	require_once('..\..\conexao.php');

	$RazaoSocial	=	 $_POST["RazaoSocial"];
	$CNPJ			=    $_POST["CNPJ"];
	
	$sql = "INSERT INTO Empresas(RazaoSocial,CNPJ) values('$RazaoSocial','$CNPJ')";
	
	if(mysqli_query($conn, $sql)){
		echo "Empresa adicionada com sucesso";
	} else{
		echo "ERROR: Não foi possível adicionar uma nova empresa " . mysqli_error($conn);
	}
?>