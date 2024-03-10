<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_produto']) && isset($_POST['quantidade_produto_' . $_POST['id_produto']])) {
        $idProduto = $_POST['id_produto'];
        $novaQuantidade = max(1, (int)$_POST['quantidade_produto_' . $idProduto]);

        // Atualize a sessão conforme necessário
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] == $idProduto) {
                $item['qtd'] = $novaQuantidade;
                break;
            }
        }

        // Pode realizar ações adicionais aqui, se necessário

        // Redirecione de volta à página do carrinho
        header('Location: caminho/para/sua/pagina/carrinho.php');
        exit;
    }
}

// Caso a requisição seja inválida, redirecione de volta à página do carrinho
header('Location: caminho/para/sua/pagina/carrinho.php');
exit;
?>
