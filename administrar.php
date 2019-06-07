<?php
    include_once "db/picapauDAO.php";
    
    if (($_GET['pagina']=='administrar')&&(!isset($_GET['produto'])) {
        echo '<table class="table table-striped table-bordered table-hover">';
        echo '  <tr><td><a href="?pagina=administrar&produto=produto"><h2>Login</h2></a></tr></td>';
        echo '</table>';
    }
    if (isset($_GET['pagina'])) {
        if (isset($_GET['produto'])){
            if ($_GET['produto'] == 'produto') {
                require_once "produto.php";
            }
        }
    
    }
    
?>
<h4 align="right">
    <a href="javascript:window.history.go(-1)">Voltar</a>
</h4>