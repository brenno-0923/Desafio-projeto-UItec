
<?php
//Esse código php serve para excluir os produtos
if(!empty($_GET['nome']))
{
    include_once('config.php');

    $nome = $_GET['nome '];

    $Select = "SELECT *  FROM cliente WHERE nome =$$nome ";

    
    if($result->num_rows > 0)
    {
        $Delete = "DELETE FROM produto WHERE nome =$nome";
    }
}
header('Location: app,component.html');

?>