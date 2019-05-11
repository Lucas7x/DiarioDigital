<?php
    session_start();
    require_once ('../model/funcionario.php');
    require_once ('../model/funcionarioDAO.php');
    require_once ('../conexao/conexao.php');

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['metodo'])) {
        $metodo=$_POST['metodo'];

        if(method_exists('controleFuncionario', $metodo)){
            $func = new controleFuncionario;
            $func->$metodo($_POST);
        }else{

        }
    }

    
    class controleFuncionario
    {
        
        function inserir()
        {
            $c=new conexao();
            $conexao=$c->conecta();

            $funcDAO=new funcionarioDAO();
            $func=new funcionario(
                mysqli_real_escape_string($conexao,$_POST['nome']),
                mysqli_real_escape_string($conexao,$_POST['cargo']),
                mysqli_real_escape_string($conexao,$_POST['carga']),
                mysqli_real_escape_string($conexao,$_POST['cpf']),
                mysqli_real_escape_string($conexao,$_POST['rg']),
                mysqli_real_escape_string($conexao,$_POST['sexo']),
                mysqli_real_escape_string($conexao,$_POST['cor']),
                mysqli_real_escape_string($conexao,$_POST['nomePai']),
                mysqli_real_escape_string($conexao,$_POST['nomeMae']),
                mysqli_real_escape_string($conexao,$_POST['endereco']),
                mysqli_real_escape_string($conexao,$_POST['estado']),
                mysqli_real_escape_string($conexao,$_POST['cep']),
                mysqli_real_escape_string($conexao,$_POST['telefone']),
                mysqli_real_escape_string($conexao,$_POST['email']),
                mysqli_real_escape_string($conexao,$_POST['formacao']),
                mysqli_real_escape_string($conexao,$_POST['cidade']),
                mysqli_real_escape_string($conexao,$_POST['dataNascimento']),
                true,
                mysqli_real_escape_string($conexao,$_POST['senha'])
            );

            if($funcDAO->cpfCadastrado($conexao,$func->getCpf())) {
                $_SESSION['msgErro']='O CPF digitado já está sendo usado!';
                $_SESSION['funcTemp']=serialize($func);           //coloca user no sessão pra recuperar
                header('Location: ../cadastrarFuncionario.php');    //manda pra pagina anterior
                exit();

            }elseif ($funcDAO->emailFuncCadastrado($conexao,$func->getEmail())) {
                $_SESSION['msgErro']='O e-mail digitado já está sendo usado!';
                $_SESSION['usuarioTemp']=serialize($func);           //coloca user no sessão pra recuperar
                header('Location: ../cadastrarFuncionario.php');    //manda pra pagina anterior
                exit();
                
            }else{
                $funcDAO->inserir($conexao,$func);
                /*$_SESSION['msgErro']='O e-mail digitado já está sendo usado!';
                header('Location: ../cadastrarFuncionario.php');    //manda pra pagina anterior
                exit();*/
            }
        }

        function alterar()
        {
            if(isset($_POST['idFuncionario'])){
                $c=new conexao();
                $conexao=$c->conecta();

                $funcDAO=new funcionarioDAO();
                $func=new funcionario(
                    mysqli_real_escape_string($conexao,$_POST['nome']),
                    mysqli_real_escape_string($conexao,$_POST['cargo']),
                    mysqli_real_escape_string($conexao,$_POST['carga']),
                    mysqli_real_escape_string($conexao,$_POST['cpf']),
                    mysqli_real_escape_string($conexao,$_POST['rg']),
                    mysqli_real_escape_string($conexao,$_POST['sexo']),
                    mysqli_real_escape_string($conexao,$_POST['cor']),
                    mysqli_real_escape_string($conexao,$_POST['nomePai']),
                    mysqli_real_escape_string($conexao,$_POST['nomeMae']),
                    mysqli_real_escape_string($conexao,$_POST['endereco']),
                    mysqli_real_escape_string($conexao,$_POST['estado']),
                    mysqli_real_escape_string($conexao,$_POST['cep']),
                    mysqli_real_escape_string($conexao,$_POST['telefone']),
                    mysqli_real_escape_string($conexao,$_POST['email']),
                    mysqli_real_escape_string($conexao,$_POST['formacao']),
                    mysqli_real_escape_string($conexao,$_POST['cidade']),
                    mysqli_real_escape_string($conexao,$_POST['dataNascimento']),
                    true,
                    ""
                );
                $id=mysqli_real_escape_string($conexao,$_POST['idFuncionario']);
                $func->setIdFuncionario($id);

                $funcDAO->alterar($conexao,$func);

            }else{
                $_SESSION['msgErro']="Funcionario não encontrado!";
                header('Location: ../alterarFuncionario.php');    //manda pra pagina anterior
                exit();
            }
                
            
        }


        function listarPorCpf(){
            $c=new conexao();
            $conexao=$c->conecta();

            if(isset($_POST['cpfBusca'])){
                $cpf=$_POST['cpfBusca'];
                $funcDAO=new funcionarioDAO();
                $funcs=$funcDAO->listarPorCpf($conexao,$cpf);
            }else{
                header('Location: ../404.html');    //manda pra pagina anterior
                exit();
            }
        }

                
    }


        /*
        switch ($Processo) { // ----- A PARTIR DESTE PONTO TESTA O PROCESSO PASSADO PELA CAMADA DE VISÃO ----- //
       
        case 'consultar': // ----- PROCESSO DE CONSULTAR PASSADO NA VISÃO CONSULTAR USUARIO ----- //
          
            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //
            
            $alu = new aluno();
            if (preg_match("/[\sa-zA-Z]+?$/i", $pesquisarAluno)) {
                $alu->consultar("select * from aluno where nome  like '%$pesquisarAluno%' "); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
                $linha = $alu->Linha;
                $rs = $alu->Result;
            } else {
                $alu->consultar("select * from aluno where matricula  like '%$pesquisarAluno%' "); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS ----- //
                $linha = $alu->Linha;
                $rs = $alu->Result;
            }

            if ($_POST['ok'] == "true") {
                //echo '<script>alert("consulta !");</script>';
                $alu->alterar($_POST['nome'], $_POST['matricula'], $_POST['situacao'], $_GET['id']);
                echo '<script>alert("Cadastro do aluno Ativado !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="listarAluno.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }
            break;
            
        case 'editar':
            global $linha; // ----- VARIAVEL GLOBAL LINHA ----- //
            global $rs; // ----- VARIALVEL GLOGAL RS, É NOSSO CONJUNTO DE DADOS OU RESULTADO ----- //

            $aluno = new aluno(); // ----- CRIA O OBJETO DE ALUNO ----- //

            $aluno->consultar("select * from aluno where idAluno=" . $_GET['idAluno']); // ----- REALIZA UMA CONSULTA E CARREGA PARA AS VARIAVEIS GLOBAIS NESTE CASO UMA CONSULTA ESPECIFICA PARA O ID DE USUARIO VEJA O WHERE----- //
            $linha = $aluno->Linha;
            $rs = $aluno->Result;

//            if ($_POST['ok'] == "true") {
            if ($_POST['botao']=='botao') {
                //echo '<script>alert("editar !");</script>';
                $aluno->alterar($_POST['nome'], $_POST['matricula'], $_POST['nomePai'],
                                $_POST['nomeMae'], $_POST['dataNascimento'], $_POST['local'],
                                $_POST['cartorio'], $_POST['residencia'],
                                $_POST['numero'], $_POST['bairro'], $_POST['cidade'],
                                $_POST['estado'], $_POST['telefone'], $_POST['escola'],
                                $_POST['emailPai'], $_POST['emailMae'], $_POST['situacao'],
                                $_GET['idAluno']);
                echo '<script>alert("Aluno alterado com sucesso !");</script>'; // ===== ALERTA JAVA SCRIPT NA TELA DO USUARIO ===== //
                echo '<script>window.location="listarAluno.php";</script>'; // ===== REDIRECIONA O USUARIO DEPOIS DE FEITA A OPERAÇÃO DESEJADA ===== //
            }

            break;
            
        case 'incluir': // ----- PROCESSO DE INCLUIR PASSADO NA VISÃO INCLUIR USUARIO ----- //
           
            
            
            $_SESSION['usuarioTemp']=serialize($usu);   //coloca user no sessão pra recuperar
            
            break; 
    
    }

    
}*/
?>