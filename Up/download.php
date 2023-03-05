<!DOCTYPE html>
<html>
<head>
	<title>Download de Arquivos</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

    *{
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        color: white;
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


</style>
<body>
    <nav>
        <h1>Download de Arquivos</h1>

        <?php
            $dir = "uploads/";
            $arquivos = array_diff(scandir($dir), array('..', '.'));
            foreach ($arquivos as $arquivo) {
                echo "<a href=\"$dir/$arquivo\" download>$arquivo</a><br>";
            }
        ?>
    </nav>
</body>
</html>