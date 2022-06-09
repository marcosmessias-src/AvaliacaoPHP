<?php
require_once 'Database.php';
require_once 'Usuario.php';

class UsuarioDAO{
    private $conexao;

    function __construct(){
        $Database = new Database;
        $this->conexao = $Database->getConexao();
    }

    function store(Usuario $usuario){
        $stmt = $this->conexao->prepare("INSERT INTO usuarios (nome, email,	senha) VALUES (:nome, :email, :senha)");
        $stmt->bindValue(':nome', $usuario->getNome());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':senha', $usuario->getSenha());
        return $stmt->execute();
    }

    function update(Usuario $usuario){
        $stmt = $this->conexao->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
        $stmt->bindValue(':nome', $usuario->getNome());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->bindValue(':id', $usuario->getId());
        return $stmt->execute();
    }

    function list(){
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios");
        if($stmt->execute()){
            return $stmt->fetchAll();
        }

        return false;
    }

    function delete($id){
        $stmt = $this->conexao->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    function find($email){
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindValue(':email', $email);
        
        if($stmt->execute()){
            return $stmt->fetch();
        }else{
            return false;
        }        
    }
}