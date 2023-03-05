<?php
    session_start();
        /*if (!isset($_SESSION['email'])) {
            header('Location: index.php');
            exit;
        }*/

        if (!file_exists('uploads')) {
            mkdir('uploads', 0777, true);
        }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homestyle.css">
    <title>Home</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

    *{
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    body{
        background-color: #252426;
    }

    nav{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    nav div{
        padding: 10px;
    }

    img{
        width: 100px;
    }

    h1{
        color: white;
    }

    h2{
        padding-top: 50px;
        color: white;
    }

    form{
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    
    label{
        padding: 15px;
    }

    #enviarbtn{
        border-radius: 5px;
        border: none;
        outline: none;
        width: 8rem;
        height: 2rem;
        background-color: #ff43ec;
    }
</style>
<body>
    <nav>
        <img id="img" src="images/download-pink.png" alt="">
        <h1>Upload de arquivos:</h1>
        
        <form action="download.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="file">Selecione o arquivo:</label>
            </div>
            <div>
                <input type="file" name="file" id="file">
            </div>
            <div>
                <input id="enviarbtn" type="submit" name="submit" value="Enviar">
            </div>
	    </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["arquivo"])) {
                $nome_arquivo = $_FILES["arquivo"]["name"];
                $caminho_arquivo = "uploads/" . basename($nome_arquivo);
                if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminho_arquivo)) {
                    echo "O arquivo $nome_arquivo foi enviado com sucesso.";
                } else {
                    echo "Ocorreu um erro ao enviar o arquivo.";
                }
            }
        ?>
    </nav>
</body>
</html>