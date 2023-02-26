<?php

namespace App\Model;

class Produto{
    private $id, $nome, $descricao, $preco;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id=$id;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome=$nome;
    }

    function getDescricao(){
        return $this->descricao;
    }

    function setDescricao($descricao){
        $this->descricao=$descricao;
    }

    function getPreco(){
        return $this->preco;
    }

    function setPreco($preco){
        $this->preco=$preco;
    }
}