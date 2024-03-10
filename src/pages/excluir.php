<?php
session_start();

if (isset($_GET['id'])) {
    $idProdutoExcluir = $_GET['id'];

    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $idProdutoExcluir) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
}

header('Location: carrinho.php');
exit;
?>
