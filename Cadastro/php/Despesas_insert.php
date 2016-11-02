<?php
	require_once('..\..\conexao.php');

	$Descricao	=	 $_POST["Descricao"];
	$Percentual			=    $_POST["Percentual"];
	
	$sql = "INSERT INTO Despesas(Descricao,Percentagem) values('$Descricao','$Percentual')";
	
	if(mysqli_query($conn, $sql)){
		echo "Despesa adicionada com sucesso";
	} else{
		echo "ERROR: Não foi possível adicionar uma nova despesa " . mysqli_error($conn);
	}
?>