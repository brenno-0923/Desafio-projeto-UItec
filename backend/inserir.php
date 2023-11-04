
<?php
//Esse código php serve para inserir os dados do formulario dentro do banco de dados
if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $cat = $_POST['cat'];
    $valor = $_POST['valor'];
    $validade = $_POST['validade'];
    $estoque = $_POST['estoque'];
    $perecivel = $_POST['perevicel'];
    

    $result_produtos = ($conexao, "INSERT INTO produto (nomeproduto,valor_produto,data_vencimento,quantidade_estoque,produto_perecivel) 
    VALUES ('$nome','$valor','$validade','$estoque','$perecivel')");


    $result_categorias = mysqli_query($conexao, "INSERT INTO categorias (nome_categoria) 
    VALUES ('$cat')");

	
}

?>