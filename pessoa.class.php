<?php
//classe com o nome Pessoa
class Pessoa{
    //objetos com visibilidade privada
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //método de captura de valor de objeto
    public function getNome() {
        return $this->nome;
    }
    //método de alteração de valor de objeto
    public function setNome($nome){
        $this->nome = $nome;
    }
    //método de captura de valor de objeto
    public function getEndereco(){
        return $this->endereco;
    }
    //método de alteração de valor de objeto
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
     //método de captura de valor de objeto
    public function getBairro(){
        return $this->bairro;
    }
    //método de alteração de valor de objeto
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
     //método de captura de valor de objeto
    public function getCep(){
        return $this->cep;
    }
    //método de alteração de valor de objeto
    public function setCep($cep){
        $this->cep = $cep;
    }
     //método de captura de valor de objeto
    public function getCidade(){
        return $this->cidade;
    }
    //método de alteração de valor de objeto
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
     //método de captura de valor de objeto
    public function getEstado(){
        return $this->estado;        
    }
    //método de alteração de valor de objeto
    public function setEstado($estado){
        $this->estado = $estado;
    }

}
?>