<?php
    $id_produto = $_GET['id'];
    print($id_produto);
    session_start();

    $produtos = $_SESSION['produtos'];

    foreach ($produtos as $produto) {
        if ($produto['id'] == $id_produto) {
    
            $encontrado_no_carrinho = false;
    
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as &$item_carrinho) {
                    if ($item_carrinho['id'] == $id_produto) {
                        $item_carrinho['qtd']++;
                        $encontrado_no_carrinho = true;
                        break;
                    }
                }
            } else {
                $_SESSION['cart'] = [];
            }
    
            if (!$encontrado_no_carrinho) {
                $_SESSION['cart'][] = [
                    'id' => $id_produto,
                    'qtd' => 1,
                ];
            }
            break;
        }
    }

   header("Refresh: 0; url=produtos.php");
?>