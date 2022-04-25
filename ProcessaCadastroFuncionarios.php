<?php
	#Arquivo para conectar com o banco
	include('conexao.php');


	if(isset($_POST['cadastrar'])){
		
		#Variaveis das tags
		$name = $_POST['name'];
		$cpf = $_POST ['cpf'];
		$nasc = $_POST['nasc'];
		$telefone = $_POST ['telefone'];
		$email = $_POST['email'];
		$endereco = $_POST ['endereco'];
		$cargo = $_POST ['cargo'];
		
		#Query para inserir os dados no Banco
		$query = mysqli_query($conecta, "INSERT INTO cadastrofuncionarios (Nome, Cpf, DataNasc, Telefone, Email, Endereco, Cargo) VALUES ('$name', '$cpf', '$nasc', '$telefone', '$email', '$endereco', '$cargo')");
		
		#Variaveis das tags
		$sucesso = file_get_contents("Sucesso.php");
		$falha = file_get_contents("falha.php");
		
		#IF se o banco vai receber os dados ou não
		if($query){
			
			print $sucesso;
			
		} else {
				echo $falha;
			}
	} 
?>