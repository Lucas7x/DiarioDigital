<?php 
	session_start();

	class funcionarioDAO
	{
		function inserir($conexao,funcionario $func){
			try{
				$query=
		            "INSERT INTO funcionario (
		                `nome`,
		                `cargo`,
		                `cargaHoraria`,
		                `cpf`,
		                `rg`,
		                `sexo`,
		                `corDaPele`,
		                `nomePai`,
		                `nomeMae`,
		                `endereco`,
		                `estado`,
		                `cep`,
		                `telefone`,
		                `email`,
		                `formacao`,
		                `senha`,
		                `situacao`,
		                `cidade`,
		                `dataNascimento`) 
		            VALUES (
		                '{$func->getNome()}',
		                '{$func->getCargo()}',
		                '{$func->getCargaHoraria()}',
		                '{$func->getCpf()}',
		                '{$func->getRg()}',
		                '{$func->getSexo()}',
		                '{$func->getCorDaPele()}',
		                '{$func->getNomePai()}',
		                '{$func->getNomeMae()}',
		                '{$func->getEndereco()}',
		                '{$func->getEstado()}',
		                '{$func->getCep()}',
		                '{$func->getTelefone()}',
		                '{$func->getEmail()}',
		                '{$func->getFormacao()}',
		                md5('{$func->getSenha()}'),
		                '{$func->getSituacao()}',
		                '{$func->getCidade()}',
		                '{$func->getDataNascimento()}'
		        	)";
		        	$result=mysqli_query($conexao,$query);

			        if($result){
			            $_SESSION['msgSucesso']="Funcionario cadastrado com sucesso!";
			        }else{
			            $_SESSION['msgErro']="Erro ao cadastrar funcionario no banco de dados!";
			        }
			        header('Location: ../cadastrarFuncionario.php');
			        exit();
			}catch(Exception $ex){
				return 0;
			}
		}

		function listar($conexao){
			try{
				$query=
		            "SELECT * FROM funcionario WHERE 1";
		        	$result=mysqli_query($conexao,$query);
		        	$funcs=mysqli_fetch_array();
		        	return $funcs;

			}catch(Exception $ex){
				return 0;
			}
		}

		function listarCargo($conexao,$cargo){
			try{
				$query=
		            "SELECT * FROM funcionario WHERE cargo='{$Cargo}'";
		        	$result=mysqli_query($conexao,$query);
		        	$funcs=mysqli_fetch_array();
		        	return $funcs;

			}catch(Exception $ex){
				return 0;
			}
		}

		function listarPorCpf($conexao,$cpf){
			try{
				$query=
		            "SELECT * FROM funcionario WHERE cpf='{$cpf}'";
		        	
	        	$result=mysqli_query($conexao,$query);

	        	if(mysqli_num_rows($result)){
	        		$funcs=mysqli_fetch_array($result);
		        	
		        	$funcTemp=new funcionario(
		        		$funcs['nome'],
		        		$funcs['cargo'],
		                $funcs['cargaHoraria'],
		                $funcs['cpf'],
		                $funcs['rg'],
		                $funcs['sexo'],
		                $funcs['corDaPele'],
		                $funcs['nomePai'],
		                $funcs['nomeMae'],
		                $funcs['endereco'],
		                $funcs['estado'],
		                $funcs['cep'],
		                $funcs['telefone'],
		                $funcs['email'],
		                $funcs['formacao'],
		                $funcs['cidade'],
		                $funcs['dataNascimento'],
		                $funcs['situacao'],
		                $funcs['senha']
		        	);
		        	$funcTemp->setIdFuncionario($funcs['idFuncionario']);


		        	

		        	$_SESSION['msgSucesso']="Funcionario encontrado!";
		        	$_SESSION['funcTemp']=serialize($funcTemp);           //coloca user no sessão pra recuperar
	        	}else{
	        		$_SESSION['msgErro']="CPF não cadastrado no banco de dados!";
	        	}

		        	
	        	header('Location: ../alterarFuncionario.php');    //manda pra pagina anterior
                exit();
	        	

			}catch(Exception $ex){
				return 0;
			}
		}

		function alterar($conexao, funcionario $func){
			try{
				$query=
					"UPDATE funcionario
		            SET nome='{$func->getNome()}',
		            	cargo='{$func->getCargo()}',
		            	cargaHoraria='{$func->getCargaHoraria()}',    
		            	cpf='{$func->getCpf()}',
		            	rg='{$func->getRg()}',
		            	sexo='{$func->getSexo()}',
		            	corDaPele='{$func->getCorDaPele()}',
		            	nomePai='{$func->getNomePai()}',
		            	nomeMae='{$func->getNomeMae()}',
		            	endereco='{$func->getEndereco()}',
		            	estado='{$func->getEstado()}',
		            	cep='{$func->getCep()}',
		            	telefone='{$func->getTelefone()}',
		            	email='{$func->getEmail()}',
		            	formacao='{$func->getFormacao()}',
		            	cidade='{$func->getCidade()}',
		            	dataNascimento='{$func->getDataNascimento()}'
		            WHERE idFuncionario='{$func->getIdFuncionario()}'";
		            
	        	$result=mysqli_query($conexao,$query);
	        	

		        if($result){
		            $_SESSION['msgSucesso']="Funcionario alterado com sucesso!";
		        }else{
		            $_SESSION['msgErro']="Erro ao alterar funcionario no banco de dados!";
		        }

		        header('Location: ../alterarFuncionario.php');
		        exit();
		        
			}catch(Exception $ex){
				return 0;
			}
		}


		function ativar($conexao,$idFunc){
			try{
				$query=
		            "UPDATE `funcionario` 
		            SET `situacao`=true,
		            WHERE idFuncionario=$idFunc";
		        	$result=mysqli_query($conexao,$query);
		        	$funcs=mysqli_fetch_array();
		        	return $funcs;

			}catch(Exception $ex){
				return 0;
			}
		}

		function desativar($conexao,$idFunc){
			try{
				$query=
		            "UPDATE `funcionario` 
		            SET `situacao`=false,
		            WHERE idFuncionario=$idFunc";
		        	$result=mysqli_query($conexao,$query);
		        	$funcs=mysqli_fetch_array();
		        	return $funcs;

			}catch(Exception $ex){
				return 0;
			}
		}

		function emailFuncCadastrado($conexao,$email){
	        $queryVer="SELECT idFuncionario FROM funcionario WHERE email='{$email}'";
	        $resultVer=mysqli_query($conexao,$queryVer);
	        $row=mysqli_num_rows($resultVer);

	        if($row>0){
	            return true;
	        }else{
	            return false;
	        }
	    }

	    function cpfCadastrado($conexao,$cpf){
	        $queryVer="SELECT idFuncionario FROM funcionario WHERE cpf='{$cpf}'";
	        
	        $resultVer=mysqli_query($conexao,$queryVer);
	        $row=mysqli_num_rows($resultVer);

	        if($row>0){
	            return true;
	        }else{
	            return false;
	        }
	    }
	}

?>