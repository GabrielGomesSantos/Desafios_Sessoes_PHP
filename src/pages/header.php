<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../../assets/css/style_header.css">
</head>
<header>

    <nav>
        <div class="cabecalho">

            <div class="categorias">
                
                <div class="img_cat">
                    <img onclick="confirmar(this.id)" src="../../assets/image/bars-solid.svg" alt="" id="menu">
                </div>

            </div>
            
            <div class="busca">
                <input type="search" name="search" id="search" id="search">
            </div>

            <div class="lupa">
                <img onclick="Header('location: index.html')" src="../../assets/image/magnifying-glass-solid(1).svg" alt="">
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


<script src="../../assets/js/script.js"></script>