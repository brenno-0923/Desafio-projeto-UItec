<?php
//Esse código php serve para que os usuarios possam editar os produtos inseridos caso necessario 
if(isset($_POST['submit'])) 
{
    include_once('config.php');
    
    $nome = $_POST['nome'];
    $cat = $_POST['cat'];
    $valor = $_POST['valor'];
    $validade = $_POST['validade'];
    $estoque = $_POST['estoque'];
    $perecivel = $_POST['perevicel'];
 
    $result = ($conexao, "INSERT INTO produto (nomeproduto,valor_produto,data_vencimento,quantidade_estoque,produto_perecivel) 
    VALUES ('$nome','$valor','$validade','$estoque','$perecivel')");


$passagem = "servico=" . urlencode('$nome','$valor','$validade','$estoque','$perecivel');
header("Location:app.component.html");
exit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto</title>
</head>
<body>
  
<div class="formulario">
  
<div class="titulo"> Cadastre-se seu produto:</div> <p>
  Nome:<input type="text" name="nome"> <p>
    <label for="cat">Categoria:</label>
    <select id="cat" name="cat">
      <option value="alimentos">Alimentos</option>
      <option value="roupas">Roupas</option>
      <option value="eletronicos">Eletrônicos</option>
      <option value="diveros">Diveros</option>
    </select> <p>
    Valor:<input type="text" name="valor"> <p>
    Validade: <input type="date" name="data"> <p>
    Estoque:<input type="number" name="estoque"> <p>
    <label for="cat">Perecivel:</label>
    <select id="perecivel" name="perecivel">
      <option value="sim">Sim</option>
      <option value="nao">Não</option>
    </select> <p>
      <input type="submit">
 
</div>
</body>
</html>