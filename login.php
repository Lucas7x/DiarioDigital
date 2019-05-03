<?php
	session_start();
	require_once('conexao/conexao.php');

	if(empty($_POST['login']) || empty($_POST['senha'])) {
		header('Location: page-login.php');
		exit();
	}

	$c=new conexao();
	$conexao=$c->conecta();

	$usuario = mysqli_real_escape_string($conexao, $_POST['login']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	$query = "SELECT * FROM funcionario WHERE (cpf='{$usuario}' OR email='{$usuario}') AND senha = md5('{$senha}')";
	$result = mysqli_query($conexao, $query);
	$row = mysqli_num_rows($result);
	
	if($row!=1){
		$query = "SELECT * FROM aluno WHERE matricula='{$usuario}' AND senha = md5('{$senha}')";
		$result = mysqli_query($conexao, $query);
		$row = mysqli_num_rows($result);
	}

	if($row == 1) {
		$user= mysqli_fetch_array($result);
		$_SESSION['usuario'] = $user['nome'];
		$_SESSION['cargo'] = $user['cargo'];

		switch ($_SESSION['cargo']) {
			case 'Diretor':
				header('Location: indexDiretor.php');
				break;

			case 'Coordenador':
				header('Location: indexCoordenador.php');
				break;

			case 'Secretário':
				header('Location: indexSecretario.php');
				break;

			case 'Professor':
				header('Location: indexProfessor.php');
				break;

			default:
				header('Location: ../404.php');
				break;
		}
		
		exit();
	} else {
		$_SESSION['nao_autenticado'] = true;
		header('Location: page-login.php');
		exit();
}