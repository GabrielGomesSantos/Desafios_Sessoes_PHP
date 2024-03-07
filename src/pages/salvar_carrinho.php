<?php
    echo("<pre>");
    print_r($_GET);
    $id_produto = $_GET['id'];
    session_start();

    $produtos = $_SESSION['products'];

    foreach($produtos as $itens) {
        if($itens['id'] == $id_produto){

            

            $produtos = [
                'id' => $id_produto,
                'qtd' => 1,
            ];


        }
    }


    //header("Refresh: 0; url=xxx.php");
?>