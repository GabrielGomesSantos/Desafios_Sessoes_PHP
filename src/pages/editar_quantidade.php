<?php
    session_start();
   
    $produtos = $_SESSION['cart'];

    if ($_GET['type'] === "minus" || $_GET['type'] === "plus") {
        foreach ($produtos as $key => &$item_carrinho) {
            if ($item_carrinho['id'] == $_GET['id']) {
                if ($_GET['type'] === "minus") {
                    if ($item_carrinho['qtd'] >= 2) {
                        $item_carrinho['qtd']--;
                    }else{
                        unset($produtos[$key]);
                    }
                       
                    
                } elseif ($_GET['type'] === "plus") {
                    $item_carrinho['qtd']++;
                }
                break;
            }
        }
    
    

        unset($item_carrinho); 
        $_SESSION['cart'] = $produtos;
    }

header('Location: carrinho.php');
exit;
?>  