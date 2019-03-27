<?php
    include_once('class.produto.php');
    include_once('class.produtos.php');

    session_start();   
    
    if( !isset( $_SESSION['lista_produtos'] ) || empty( $_SESSION['lista_produtos'] ) ) {
        $_SESSION['lista_produtos'] = new Produtos();
        $current_index = 0;
    } else {
        $current_index = count( $_SESSION['lista_produtos']->get_lista() );
    }

    // session_destroy();

    // var_dump( $_SESSION['lista_produtos']->get_lista() );
    // echo count( $_SESSION['lista_produtos']->get_lista() );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revisão PHP</title>
</head>
<body>
    <section class="content">
        <h2>Incluir produto</h2>
        <form action="salvaProduto.php" method="post">
            <input type="text" required name="nome" placeholder="Nome">
            <input type="text" required name="valor" placeholder="Valor">
            <input type="hidden" name="indice" value="<?php echo $current_index; ?>">
            <button>Salvar</button>
        </form>

        <h2>Listar Produtos</h2>
            <ul>
                <?php                     
                    foreach( $_SESSION['lista_produtos']->get_lista() as $produto ) {
                ?>
                    <li><?php echo $produto->get_nome() . " R$ " . $produto->get_valor() ?> <a href="deletaProduto.php?idx=<?php echo $produto->get_indice() ?>">excluir</a></li>
                <?php
                    }
                ?>
            </ul>
    </section>
</body>
</html>