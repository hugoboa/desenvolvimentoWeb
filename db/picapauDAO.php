<?php
function conecta() {
    $string_conexao = "host=localhost port=5432 dbname=picapau user=postgres password=123456";
    $conexao = pg_connect($string_conexao) or die ('Falha na conexÃ£o.');
    return $conexao;
}
function listaProdutos() {
    $conexao = conecta();
    $sql = "SELECT 
                * 
            FROM 
                produtos, imagensprodutos 
            WHERE 
                produtos.id = imagensprodutos.idproduto;";

    $resultado = pg_query($conexao, $sql);
    $matriz = pg_fetch_all($resultado);

    pg_close($conexao);

    return $matriz;
}

function buscaProduto($id) {
    $conexao = conecta();
    $sql = "SELECT 
                produtos.id, imagensprodutos.nome, modelo, marca, descricao, precovenda 
            FROM 
                produtos, imagensprodutos 
            WHERE 
                produtos.id = imagensprodutos.idproduto AND 
                produtos.id = '$id';";
    
    $resultado = pg_query($conexao, $sql);
    $vetor = pg_fetch_row($resultado);
    
    pg_close($conexao);

    return $vetor;
}

function cadastrarNovoCliente($vetor) {
    $conexao = conecta();
    $sql = "INSERT INTO 
                clientes(nome,sobrenome,cpf,email,logradouro,numero,complemento,uf,cep,senha) 
            VALUES 
                ('$vetor[0]','$vetor[1]','$vetor[2]','$vetor[3]','$vetor[4]','$vetor[5]','$vetor[6]','$vetor[7]','$vetor[8]',md5('$vetor[9]'));";
    
    $resultado = pg_query($conexao, $sql);
}