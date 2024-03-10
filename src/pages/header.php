<?php 

   if(!isset($_SESSION)){
    session_start();
    };  

    if(!isset($_SESSION['cart'])){
        $total_carrinho = 0;
    }
    else{
        $total_carrinho = count($_SESSION['cart']);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Header</title>
    <link rel="stylesheet" href="../../assets/css/style_header.css">
</head>
<header>

    <nav>
        <div class="cabecalho">

        <div class="categorias_oculta" id="categoria" style="display: none;">
            <p id="todos" onclick="categoria(this.id)"> + Todos os Produtos</p>
            <p id="peca" onclick="categoria(this.id)">+ Peças</p>
            <p id="periferico" onclick="categoria(this.id)" >+ Perifericos</p>
            <p id="mobile" onclick="categoria(this.id)" >+ Mobiles</p>
            <p id="computadores" onclick="categoria(this.id)">+ Computadores</p>
        </div>

            <div class="categorias">
                
                <div class="img_cat">
                    <img onclick="mostrar('categoria')" src="../../assets/image/bars-solid.svg" alt="" id="menu">
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
                    <img onclick="location.href='carrinho.php'" src="../../assets/image/cart-shopping-solid(1).svg" alt="" id="carrinho">

                    <div class="mostrador">
                        <p><?php Echo($total_carrinho)?></p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </nav>
 
        
</header>

<script src="../../assets/js/script.js"></script>