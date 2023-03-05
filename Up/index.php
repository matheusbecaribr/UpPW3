<?php
    include('config.php');

    if(isset($_POST['email']) || isset($_POST['senha']))
    {
        if(strlen($_POST['email']) == 0)
        {
            echo "Digite seu email!";
        } else if(strlen($_POST['senha']) == 0){
            echo "Digite sua senha!";
        } else{
            $email = $conexao->real_escape_string($_POST['email']);
            $senha = $conexao->real_escape_string($_POST['senha']);
        
            $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
        
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1)
            {
                $user = $sql_query->fetch_assoc();

                if(!isset($_SESSION))
                {
                    session_start();
                    $_SESSION['email'] = $_POST['email'];
                }


                header('location: home.php');
            } else{
                echo "Falha ao logar. E-mail e/ou senha incorretos!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Entrar</title>
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
                <form method="POST">
                    <h3>Fazendo seu login</h3>
                    <p>Entre na sua conta para validação</p>
                    <div>
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
                        <button type="submit" name="submit">Entrar</button>
                        <a id="contabtn" href="register.php">Criar conta</a>
                    </div>
                </form>
            </div>
        </nav>
    </div>
    <script src="script.js"></script>
</body>
</html>