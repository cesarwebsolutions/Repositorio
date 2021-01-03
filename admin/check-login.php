<?php 

if(isset($_POST['email']) && isset($_POST['senha'])){

	$email = trim($_POST['email']);
	$senha = trim($_POST['senha']);

		// VERIFICAR as variaveis estao vazias
	if(!empty($email) && !empty($senha)){

			// REQUISITAR  ARQUIVO DE CONEXÃO COM BANCO DE DADOS
		include_once('../config/database.php');

			// ESCREVER A QUERY A SER EXECUTADA
		$query = 'SELECT * FROM usuarios
		WHERE email="'.$email.'" AND senha="'.$senha.'"';

			//executar a query e trazer os resultados
		$result = $conn->query($query);

			// encerrar a conexão com banco de dados
		$conn->close();

			//var_dump($result);
		if($result->num_rows == 1){

				// iniciar sessão
			session_start();

				// gravar dados do usuarios na sessão
			$_SESSION['usuario'] = $senha;

				// SUCESSO
				// REDIRECIONAR PARA A TELA DE LOGIN
			header('Location: index.php');

		}else{
				// FALHA
				// REDIRECIONAR PARA A TELA DE LOGIN
			header('Location: login.php?falha-login');
		}



	}

}


?>