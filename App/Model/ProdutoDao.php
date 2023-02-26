<?php

namespace App\Model;

class ProdutoDao
{

    function create(Produto $p)
    {
        $sql = 'INSERT INTO produtos(nome,descricao,preco) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getpreco());
        $stmt->execute();
        if($stmt->rowcount()>0){
            return true;
        }

    }

    function read()
    {
        $sql = 'SELECT * FROM produtos';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowcount()>0){
            return $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        return [];
    }

    function update(Produto $p)
    {
        $sql = 'UPDATE produtos SET nome = ?, descricao = ?, preco = ? WHERE id = ?'; 
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute(array($p->getNome(), $p->getDescricao(), $p->getPreco(), $p->getId()));
    }

    function delete($id)
    {
    }
}
