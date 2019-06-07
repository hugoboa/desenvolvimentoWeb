<!doctype html>
<html lang="pt-br">
    
    <head>
        <title>Pica Pau tratores</title>
        <meta name="viewport" content="width=device-width", user-scalable="no">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/CSS" href="CSS/modelo.css">
    </head>
    <body>
        <nav class= "menu">
            <?php
                echo '<img class="imagem" src="IMG/logo tipo tratorpeças.jpg" alt="trator"width="100%" height="35%">';
                if (!isset($_GET['pagina'])) {
                    echo '<ul>';
                    echo    '<li><a href="index.php"> Home</a></li>';
                    echo    '<li><a href="?pagina=produtos">Produtos</a></li>';
                    echo    '<li><a href="?pagina=sobre">Sobre</a></li>';
                    echo    '<li><a href="?pagina=clientes">Clientes</a></li>';
                    echo    '<li><a href="?pagina=adm">Administrar</a></li>';
                    echo'</ul>'; 
                    }
                    if (isset($_GET['pagina'])) {
                        if ($_GET['pagina'] == 'produtos') {
                            require_once "produtos.php";
                        }
                        if ($_GET['pagina'] == 'clientes') {
                            require_once "indexClientes.php";
                        }
                        if ($_GET['pagina'] == 'sobre') {
                            require_once "sobre.php";
                        }
                        if ($_GET['pagina'] == 'adm') {
                            require_once "administrar.php";
                        }

                    }
            ?>            
        </nav>
    </body> 
    <footer class="footerStyle">
        &copy Hugo boa
    </footer>
</html>