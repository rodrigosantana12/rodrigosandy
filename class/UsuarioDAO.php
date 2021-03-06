<?php
require_once('Conexao.php');

class UsuarioDAO {

    private $pdo;

    function __construct() {
        $this->pdo = Conexao::getConexao();
    }    

    function cadastrar($email, $senha) {
        try {
            $cmd = $this->pdo->prepare("INSERT INTO usuario 
            (email, senha) 
            VALUES (:email, :senha)");
            
            $cmd->bindValue(':email', $email);
            $cmd->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT));
            $cmd->execute();
            
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    function getUsuario($email) {
        try {
            $cmd = $this->pdo->prepare("SELECT id, email, senha FROM usuario 
            WHERE email = :email");
            $cmd->bindValue(':email', $email);
            $cmd->execute();

            $usuario = $cmd->fetch(PDO::FETCH_OBJ);
            return $usuario;
        } catch(Exception $e) {
            die($e->getMessage());
        }        
    }
}

?>