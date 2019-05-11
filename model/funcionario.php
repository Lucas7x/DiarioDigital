<?php
/**
*
* @author Lucas
*/
 class funcionario {

    private $idFuncionario;
    private $nome;
    private $cargo;
    private $cargaHoraria;
    private $cpf;
    private $rg;
    private $sexo;
    private $corDaPele;
    private $nomePai;
    private $nomeMae;
    private $endereco;
    private $estado;
    private $cep;
    private $telefone;
    private $email;
    private $formacao;
    private $senha;
    private $situacao;
    private $cidade;
    private $dataNascimento;

    /**
    * Construtor
        */
    public function funcionario($nome,$cargo,$cargaHoraria,$cpf,$rg,$sexo,$corDaPele,$nomePai,$nomeMae,$endereco,$estado,$cep,$telefone,$email,$formacao,$cidade,$dataNascimento,$situacao,$senha){

        $this->setNome($nome);
        $this->setCargo($cargo);
        $this->setCargaHoraria($cargaHoraria);
        $this->setCpf($cpf);
        $this->setRg($rg);
        $this->setSexo($sexo);
        $this->setCorDaPele($corDaPele);
        $this->setNomePai($nomePai);
        $this->setNomeMae($nomeMae);
        $this->setEndereco($endereco);
        $this->setEstado($estado);
        $this->setCep($cep);
        $this->setTelefone($telefone);
        $this->setEmail($email);
        $this->setFormacao($formacao);
        $this->setSenha($senha);
        $this->setSituacao($situacao);
        $this->setCidade($cidade);
        $this->setDataNascimento($dataNascimento);
    }

    /**
    * seta o valor de $idFuncionario
    * @param $pIdFuncionario
    */
    public function setIdFuncionario($pIdFuncionario){
        $this->idFuncionario = $pIdFuncionario;
    }
    /**
    * return pk_$idFuncionario
    */
    public function getIdFuncionario(){
        return $this->idFuncionario;
    }

    /**
    * seta o valor de $nome
    * @param $pNome
    */
    public function setNome($pNome){
        $this->nome = $pNome;
    }
    /**
    * return $nome
    */
    public function getNome(){
        return $this->nome;
    }

    /**
    * seta o valor de $cargo
    * @param $pCargo
    */
    public function setCargo($pCargo){
        $this->cargo = $pCargo;
    }
    /**
    * return $cargo
    */
    public function getCargo(){
        return $this->cargo;
    }

    /**
    * seta o valor de $cargaHoraria
    * @param $pCargaHoraria
    */
    public function setCargaHoraria($pCargaHoraria){
        $this->cargaHoraria = $pCargaHoraria;
    }
    /**
    * return $cargaHoraria
    */
    public function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    /**
    * seta o valor de $cpf
    * @param $pCpf
    */
    public function setCpf($pCpf){
        $this->cpf = $pCpf;
    }
    /**
    * return $cpf
    */
    public function getCpf(){
        return $this->cpf;
    }

    /**
    * seta o valor de $rg
    * @param $pRg
    */
    public function setRg($pRg){
        $this->rg = $pRg;
    }
    /**
    * return $rg
    */
    public function getRg(){
        return $this->rg;
    }

    /**
    * seta o valor de $sexo
    * @param $pSexo
    */
    public function setSexo($pSexo){
        $this->sexo = $pSexo;
    }
    /**
    * return $sexo
    */
    public function getSexo(){
        return $this->sexo;
    }

    /**
    * seta o valor de $corDaPele
    * @param $pCorDaPele
    */
    public function setCorDaPele($pCorDaPele){
        $this->corDaPele = $pCorDaPele;
    }
    /**
    * return $corDaPele
    */
    public function getCorDaPele(){
        return $this->corDaPele;
    }

    /**
    * seta o valor de $nomePai
    * @param $pNomePai
    */
    public function setNomePai($pNomePai){
        $this->nomePai = $pNomePai;
    }
    /**
    * return $nomePai
    */
    public function getNomePai(){
        return $this->nomePai;
    }

    /**
    * seta o valor de $nomeMae
    * @param $pNomeMae
    */
    public function setNomeMae($pNomeMae){
        $this->nomeMae = $pNomeMae;
    }
    /**
    * return $nomeMae
    */
    public function getNomeMae(){
        return $this->nomeMae;
    }

    /**
    * seta o valor de $endereco
    * @param $pEndereco
    */
    public function setEndereco($pEndereco){
        $this->endereco = $pEndereco;
    }
    /**
    * return $endereco
    */
    public function getEndereco(){
        return $this->endereco;
    }

    /**
    * seta o valor de $estado
    * @param $pEstado
    */
    public function setEstado($pEstado){
        $this->estado = $pEstado;
    }
    /**
    * return $estado
    */
    public function getEstado(){
        return $this->estado;
    }

    /**
    * seta o valor de $cep
    * @param $pCep
    */
    public function setCep($pCep){
        $this->cep = $pCep;
    }
    /**
    * return $cep
    */
    public function getCep(){
        return $this->cep;
    }

    /**
    * seta o valor de $telefone
    * @param $pTelefone
    */
    public function setTelefone($pTelefone){
        $this->telefone = $pTelefone;
    }
    /**
    * return $telefone
    */
    public function getTelefone(){
        return $this->telefone;
    }

    /**
    * seta o valor de $email
    * @param $pEmail
    */
    public function setEmail($pEmail){
        $this->email = $pEmail;
    }
    /**
    * return $email
    */
    public function getEmail(){
        return $this->email;
    }

    /**
    * seta o valor de $formacao
    * @param $pFormacao
    */
    public function setFormacao($pFormacao){
        $this->formacao = $pFormacao;
    }
    /**
    * return $formacao
    */
    public function getFormacao(){
        return $this->formacao;
    }

    /**
    * seta o valor de $senha
    * @param $pSenha
    */
    public function setSenha($pSenha){
        $this->senha = $pSenha;
    }
    /**
    * return $senha
    */
    public function getSenha(){
        return $this->senha;
    }

    /**
    * seta o valor de $situacao
    * @param $pSituacao
    */
    public function setSituacao($pSituacao){
        $this->situacao = $pSituacao;
    }
    /**
    * return $situacao
    */
    public function getSituacao(){
        return $this->situacao;
    }

    /**
    * seta o valor de $cidade
    * @param $pCidade
    */
    public function setCidade($pCidade){
        $this->cidade = $pCidade;
    }
    /**
    * return $cidade
    */
    public function getCidade(){
        return $this->cidade;
    }

    /**
    * seta o valor de $dataNascimento
    * @param $pDataNascimento
    */
    public function setDataNascimento($pDataNascimento){
        $this->dataNascimento = $pDataNascimento;
    }
    /**
    * return $dataNascimento
    */
    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function toString(){
        return "funcionario {" . "::idFuncionario = " . $this->idFuncionario . "::nome = " . $this->nome . "::cargo = " . $this->cargo . "::cargaHoraria = " . $this->cargaHoraria . "::cpf = " . $this->cpf . "::rg = " . $this->rg . "::sexo = " . $this->sexo . "::corDaPele = " . $this->corDaPele . "::nomePai = " . $this->nomePai . "::nomeMae = " . $this->nomeMae . "::endereco = " . $this->endereco . "::estado = " . $this->estado . "::cep = " . $this->cep . "::telefone = " . $this->telefone . "::email = " . $this->email . "::formacao = " . $this->formacao . "::usuario = " . $this->usuario . "::senha = " . $this->senha . "::situacao = " . $this->situacao . "::cidade = " . $this->cidade . "::dataNascimento = " . $this->dataNascimento .  "}";
    }
    
}
?>