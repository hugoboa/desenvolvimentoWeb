<?php
    if(!isset($_POST['cliente'])){
?>

<table>
    <form method='post'>
    <tr>
        <td>Nome</td>
        <td><input type='text' name='nome'></td>
        <td>Sobrenome</td>
        <td><input type='text' name='sobrenome'></td>
    </tr>
    <tr>
        <td>CPF</td>
        <td><input type='text' name='cpf'></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>e-mail</td>
        <td><input type='text' name='login'></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Endereço</td>
        <td><input type='text' name='endereco'></td>
        <td>Numero</td>
        <td><input type='text' name='numero'></td>
    </tr>
    <tr>
        <td>UF</td>
        <td><input type='text' name='uf'></td>
        <td>CEP</td>
        <td><input type='text' name='cep'></td>
    </tr>
    <tr>
        <td>Senha:</td>
        <td><input type='password' name='pws'></td>
        <td>Repita a senha:</td>
        <td><input type='password' name='pws2'></td>
    </tr>
    <tr>
        <td><input type='reset' value='Apaga Tudo!!!'></td>
        <td><input type='submit' value='Cadastrar' name='cadcliente'></td>
    </tr>
    </form>
</table>

<?php
    }
    else{    
        if ($_POST['pws']==$_POST['pws2']){
            $senha = $_POST['pws'];
        } else {
            echo "As senhas não são iguais";
        }
        $vetor = [$_POST['nome'], $_POST['sobrenome'],$_POST['cpf'],$_POST['login'],$_POST['endereco'],$_POST['numero'],'',$_POST['uf'],$_POST['cep'],$senha];
        echo $_POST['nome'];
        cadastrarNovoCliente($vetor);
    }
?>