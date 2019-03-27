<?php 
    include_once('class.produto.php');
    include_once('class.produtos.php');
    
    session_start();

    $indice = $_GET['idx'];  

    $_SESSION['lista_produtos']->delete_produto( $indice );

    header("location: index.php");
    die();
?>

