<?php 
    include_once('class.produto.php');
    include_once('class.produtos.php');
    
    session_start();

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $indice = $_POST['indice'];

    $produto = new Produto($nome, $valor, $indice);    

    $_SESSION['lista_produtos']->add_produto( $produto );

    header("location: index.php");
    die();
?>

