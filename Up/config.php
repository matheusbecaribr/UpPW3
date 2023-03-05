<?php

    $host = 'localhost';
    $user = 'root';
    $password = '@Myl101917';
    $database = 'PWup';

    $conexao = new mysqli($host, $user, $password, $database);

    if($conexao->connect_errno)
    {
        echo 'Erroooo';
    }



    function cadastrarUsuario($nome,$email,$senha){

        $sql = 'INSERT INTO usuario(nome, email, senha) VALUES ("'.$nome.'","'.$email.'","'.$senha.'")';

        $res = $GLOBALS['conexao']->query($sql);

        if($res)
        {

          echo "Usuário cadastrado com sucesso!";

        }else{

          echo "Erro ao cadastrar!";
          
        }
    }

?>