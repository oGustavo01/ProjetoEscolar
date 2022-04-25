<?php
	#Arquivo para conectar com o banco
	include('conexao.php');


	if(isset($_POST['cadastrar'])){
			
			#Variaveis das tags
			$name = $_POST['name'];
			$email = $_POST['email'];
			$nasc = $_POST['nasc'];
			
			#Query para inserir os dados no Banco
			$query = mysqli_query($conecta, "INSERT INTO cadastroclientes (Nome, Email, Senha) VALUES ('$name', '$email', '$nasc')");
			
			#Variaveis das tags
			$login = file_get_contents("TelaLogin.php");
			$falha = file_get_contents("falha.php");
			
			#IF se o banco vai receber os dados ou não
			if($query){
				
				print $login;
				
			} else {
					echo $falha;
				}
	}			
?>