<?php

     include 'Conexao.php';
     include_once '../model/DTO/UsuarioDTO.php';

class UsuarioDAO{
    public $pdo = null;
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }
    public function salvarUsuario(UsuarioDTO $usuarioDTO){
        
        try{
            $sql = "INSERT INTO USUARIO (nome, idade) VALUES (?, ?)";
            $stmt = $this->pdo->prepare($sql);

            $nome = $usuarioDTO->getNome();
            $idade = $usuarioDTO->getIdade();
            

            $stmt->bindValue(1,$nome);
            $stmt->bindValue(2,$idade);

            $returno = $stmt->execute();

            return $returno;

        }catch(PDOException $exe){
            echo $exe->getMessage();
        }
    }


    public function listarUsuarios(){
    try{
    $sql = "SELECT * FROM USUARIO";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();

    $retorno = $stmt->fetchALL(PDO::FETCH_ASSOC);
    return $retorno;

    }catch(PDOException $exe){
        echo $exe->getMessage();
    }
}

public function excluirUsuario($id_usuario){
    try{
        $sql= "DELETE FROM USUARIO WHERE ID_USUARIO = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1,$id_usuario);
       

        $retorno = $stmt->execute();
        return $retorno;

    }catch(PDOException $exe){
        echo $exe->getMessage();
    }
}

}



?>