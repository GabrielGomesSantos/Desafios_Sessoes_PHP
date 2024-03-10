<?php
    session_start();

    $Carrinho = $_SESSION['cart'];
    $produtos = $_SESSION['produtos'];
    $total_carrinho = count($_SESSION['cart']);
    
    $valor_total = 0
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style_carrinho.css">
</head>
<header>

    <nav>
        <div class="cabecalho">

            <div class="voltar">
                <button onclick="location.href='produtos.php'">Voltar</button>
            </div>
           
            <div class="texto">
                <p>Meu Carrinho</p> 
            </div>

           
            <div class="carrinho">

                <div class="img_cart">
                    <img src="../../assets/image/cart-shopping-solid(1).svg" alt="" id="carrinho">

                    <div class="mostrador">
                       <p><?php echo($total_carrinho)?></p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </nav>

</header>

<body>

    <div class="conteudo_carrinho">

        <div class="produtos_carrinho">
            <?php
                   
                foreach ($Carrinho as $item) {
                    if (isset($item['id'])) {
                        foreach ($produtos as $produto) {
                            if ($item['id'] == $produto['id']) {
                                $valor_total += floatval($produto['price'] * $item['qtd']);

                                echo("
                                        <div class='produtos'> 
                                            <div class='imagem_carrinho'>
                                                <img src='{$produto['img']}' alt=''>
                                            </div>
                                            
                                            <div class='nome_carrinho'> 
                                                <p>{$produto['name']}</p>
                                                <a href='excluir.php?id={$produto['id']}'>excluir</a>
                                            </div>

                                            <div class='price_carrinho'>
                                                <p>{$produto['price']},00</p>
                                            </div>

                                            <div class='quantidade_carrinho'>
                                                <button id='{$produto['id']}' onclick=\"editar(this.id,'plus')\">+</button>
                                                    <p>{$item['qtd']}</p>
                                                <button id='{$produto['id']}' onclick=\"editar(this.id,'minus')\">-</button>
                                            </div>

                                        </div>

                                        <div class='separador'>

                                        </div>
                                    
                                    ");
                                break;
                            }
                        }
                    }
                }


            ?>  
        </div>

        <div class="resumo">
            <P>Resumo do Pedido:</P>
            <div class="informacao">
                <div class="texto">
                    <p>Produtos</p>
                <p class="menor">(<?php echo($total_carrinho)?>)</p>
                    <p class="preco"> <?php Echo($valor_total . ",00")?></p>
                </div>
            </div>

            <div class="button_carrinho">
                <button>Finalizar Compra</button>
            </div>
        </div>

    </div>



</body>


<script src="../../assets/js/script.js"></script>