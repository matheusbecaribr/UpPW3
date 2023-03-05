

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Criar conta</title>
</head>
<body>
    <header>
    </header>
    <div class="container">
        <nav> 
            <div class="cols">
                <img src="./images/6333187.png" alt="">
            </div>
            <div class="cols">
                <form action="" method="POST" class="form" name="form">
                    <h3>Criando sua conta</h3>
                    <p>Crie uma conta para entrar</p>
                    <div>
                        <div>
                            <div>
                                <label for="">Nome:</label>
                            </div>
                            <div>
                                <input type="text" name="nome" id="nome">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="">Email:</label>
                            </div>
                            <div>
                                <input type="email" name="email" id="email">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="">Senha:</label>
                            </div>
                            <div>
                                <input type="password" name="senha" id="senha">
                            </div>
                        </div>
                    </div>
                    <div class="btns">
                        <input type="submit" name="usuario" id="buttoncriar" value="Cadastrar">
                        <a id="contabtn" href="index.php">Fazer login</a>
                    </div>
                </form>
            </div>
        </nav>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php

    include('config.php');

    if($_POST)
    {
        if(isset($_POST['usuario']))
        {

            $resultado = cadastrarUsuario($_POST['nome'],$_POST['email'],$_POST['senha']);

            header('location: home.php');
        }else{

            echo "Erro ao cadastrar usuário";

        }
    }

?>