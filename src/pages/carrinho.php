<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style_header.css">
</head>
<header>

    <nav>
        <div class="cabecalho">

            <div class="voltar">
                <button>Voltar</button>
            </div>
           
            <div class="texto">
                <p>Meu Carrinho</p>
            </div>

           
            <div class="carrinho">

                <div class="img_cart">
                    <img src="../../assets/image/cart-shopping-solid(1).svg" alt="" id="carrinho">

                    <div class="mostrador">
                        <!-- <p><?php Echo($total_carrinho)?></p> -->
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
            
            ?>
        </div>

        <div class="resumo">
            <P>Resumo do Pedido:</P>
            <div class="informacao">
                <div class="texto">
                    <p>Produtos</p>
                <p class="menor">(3)</p>
                    <p class="preco"> 11.700,00</p>
                </div>
            </div>

            <div class="button_carrinho">
                <button>Finalizar Compra</button>
            </div>
        </div>

    </div>



</body>


<script src="../../assets/js/script.js"></script>