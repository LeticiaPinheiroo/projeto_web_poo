<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome'] ."<br><br>");
        echo $pessoa->getNome();

        $pessoa->setEndereco($_POST['endereco']."<br><br>");
        echo $pessoa->getEndereco();

        $pessoa->setBairro($_POST['bairro']."<br><br>");
        echo $pessoa->getBairro();

        $pessoa->setCep($_POST['cep']."<br><br>");
        echo $pessoa->getCep();

        $pessoa->setCidade($_POST['cidade']."<br><br>");
        echo $pessoa->getCidade();

        $pessoa->setEstado($_POST['estado']."<br><br>");
        echo $pessoa->getEstado();


    }
}new Teste();

?>