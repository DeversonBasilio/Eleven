<?php
	require_once('..\..\conexao.php');
	
	$COD_Empresa	=	$_POST["COD_Empresa"];
	$Especie		=   $_POST["Especie"];
	$NTitulo		=	$_POST["NTitulo"];
	$Valor			=   $_POST["Valor"];
	
	$DtVencimento	= \DateTime::createFromFormat('m/d/Y', $_POST["Vencimento"]);
	$Vencimento 	= $DtVencimento->format('Y-m-d');
	
	echo $sql = "INSERT INTO Titulos(Especie,Vencimento,COD_Empresa,Valor,Num_Titulo) values('$Especie','$Vencimento','$COD_Empresa','$Valor','$NTitulo');";
	
	if(mysqli_query($conn, $sql)){
		echo "Despesa adicionada com sucesso". mysqli_error($conn);
	} else{
		echo "ERROR: Não foi possível adicionar uma nova despesa " . mysqli_error($conn);
	}
?>