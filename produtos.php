<?php
include_once 'db/picapauDAO.php';

if(!isset($_GET['id'])) { 
    $lista = listaProdutos(); 
?>

    <h1>Lista de Produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Descrição</th>
            <th>Valor</th>
        </tr>

        <?php       
        foreach ($lista as $produto){ ?>
            <tr>
                <td><?php echo $produto['id'] ?></td>
                <td><center><img src='img/<?php echo $produto['nome'] ?>' width=40 height=40></center></td>
                <td><a href="?pagina=produtos&id=<?php echo $produto['id'] ?>"> <?php echo $produto['modelo'] ?></a></td>
                <td><?php echo $produto['marca'] ?></td>
                <td><?php echo $produto['descricao'] ?></td>
                <td><?php echo $produto['precovenda'] ?></td>
            </tr>
        <?php 
        } ?>
    </table>
<?php
} 

if(isset($_GET['id'])) { 
    $produto = buscaProduto($_GET['id']); ?>

    <h1>Produto</h1>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Descrição</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td><?php echo $produto[0] ?></td>
            <td><center><img src='img/<?php echo $produto[1] ?>' width=40 height=40></center></td>
            <td><?php echo $produto[2] ?></td>
            <td><?php echo $produto[3] ?></td>
            <td><?php echo $produto[4] ?></td>
            <td><?php echo $produto[5] ?></td>
        </tr>
    </table>
<?php
} ?>

<h4 align="right">
    <a href="javascript:window.history.go(-1)">Voltar</a>
</h4>