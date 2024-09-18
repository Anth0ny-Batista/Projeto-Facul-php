<?php


	session_start();
	$usuario= $_POST["usuario"];
	$senha= $_POST["senha"];
	
	if( $usuario === "Unicid123" && $senha === "ADS123"){ 
		
		$_SESSION['logado'] = 's';
		$_SESSION['usuario'] = $usuario;
		$_SESSION['erro'] = '';
				
	}else{
		
		$_SESSION['erro'] = "login ou senha incorretos";
	}
	
	header("Location: home.php");
	

?>