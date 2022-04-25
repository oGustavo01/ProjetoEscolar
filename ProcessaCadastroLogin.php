<?php

	include('conexao.php');


if(isset($_POST['cadastrar'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		
		
		
		$query = mysqli_query($conecta, "INSERT INTO cadastrologin (Nome, Email) VALUES ('$name', '$email')");
		
		#Variaveis das tags
		$inicial = file_get_contents("Telainicial.php");
		$falha = file_get_contents("falha.php");
		
		#IF se o banco vai receber os dados ou não
		if($query){
			
			print $inicial;
			
		} else {
				echo $falha;
			}
	} 
?>

