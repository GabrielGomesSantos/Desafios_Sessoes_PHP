<?php 
    
    session_start();
    $categoria = "todos";

    if (isset($_GET['tipo'])) {
        $categoria = $_GET['tipo'];
    }


    $products = [
        ['id' => 1, 'name' => 'Placa Mãe LKA1151', 'description' => 'Placa-mãe compatível com processadores LGA1151, oferecendo desempenho estável e recursos avançados para o seu sistema.', 'price' => number_format(300, 0, '', ''), 'img' => '../../assets/image/placa-mae.png', 'categoria' => 'peca'],
    
        ['id' => 2, 'name' =>'Memória RAM 8GB DDR4', 'description' => 'Módulo de memória DDR4 de 8GB para melhorar a velocidade e a eficiência do seu sistema, proporcionando uma experiência mais fluida.', 'price' => number_format(300, 0, '', ''), 'img' => '../../assets/image/memoria-ram-notebook.png', 'categoria' => 'peca'],
    
        ['id' => 3, 'name' => 'Teclado Mecânico Switch Red', 'description' => 'Teclado mecânico com switches Red, proporcionando uma experiência de digitação rápida e precisa, ideal para gamers e profissionais exigentes.', 'price' => number_format(300, 0, '', ''), 'img' => '../../assets/image/teclado.png', 'categoria' => 'periferico'],
    
    
        ['id' => 4, 'name' => 'Computador Designer Gráfico', 'description' => 'Computador otimizado para design gráfico, equipado com hardware de alta performance para lidar com as demandas intensivas de programas de design.', 'price' => number_format(8500, 0, '', ''), 'img' => '../../assets/image/gabinete-pc.png', 'categoria' => 'computadores'],
        ['id' => 5, 'name' => 'Notebook Maçã Mk1', 'description' => 'Notebook da marca Maçã modelo Mk1, combinação de design elegante e desempenho avançado para atender às suas necessidades diárias.', 'price' => number_format(10500, 0, '', ''), 'img' => '../../assets/image/notebook.png', 'categoria' => 'computadores'],
    
        ['id' => 6, 'name' => 'Monitor Dull 24’', 'description' => 'Monitor Dell de 24 polegadas, oferecendo cores vibrantes e imagens nítidas para uma experiência visual envolvente em qualquer aplicação.', 'price' => number_format(2000, 0, '', ''), 'img' => '../../assets/image/monitor-pc.png', 'categoria' => 'periferico'],
    
        ['id' => 7, 'name' => 'Impressora Laser', 'description' => 'Impressora laser de alta velocidade para documentos, proporcionando impressões rápidas e de alta qualidade para suas necessidades de escritório.', 'price' => number_format(2500, 0, '', ''), 'img' => '../../assets/image/impressora.png', 'categoria' => 'periferico'],
    
        ['id' => 8, 'name' => 'Tablet Multilazer', 'description' => 'Tablet da marca Multilaser, perfeito para entretenimento e produtividade em movimento, com recursos avançados e design portátil.', 'price' => number_format(10, 0, '', ''), 'img' => '../../assets/image/tablet.png', 'categoria' => 'mobile'],
    
        ['id' => 9, 'name' => 'Smartphone Samcat A22', 'description' => 'Smartphone da marca Samcat modelo A22, oferecendo desempenho confiável e recursos avançados para atender às suas necessidades diárias de comunicação.', 'price' => number_format(200, 0, '', ''), 'img' => '../../assets/image/smartphone.png', 'categoria' => 'mobile'],
    
        ['id' => 10, 'name' => 'Mouse 10 pila', 'description' => 'Mouse por 10 reais, uma opção acessível e funcional para suas tarefas diárias de computação.', 'price' => number_format(10, 0, '', ''), 'img' => '../../assets/image/mouse.png', 'categoria' => 'periferico'],
    ];
    

    $_SESSION['produtos'] = $products;  

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_produtos.css">
    <title>Produtos pages</title>
</head>

<header>
    <?php include("header.php")?>
</header>

<body>


    <div class="conteudo">

        <?php 
            if($categoria == "todos"){
                foreach ($products as $product) {
                    echo("
                    <div class='produto'>
    
                        <div class='imagem_produto'>
                            <img src='{$product['img']}' alt=''>
                        </div>
                        
                        <div class='texto'>
                            <p class='nome'>{$product['name']}</p>
                            <br>
                            <p class='price'>R$ {$product['price']},00</p>
                        </div>
                        
                        <div class='button'>
                            <button id='{$product['id']}' onclick=\"carrinho(this.id)\">Adicionar ao carrinho</button>
                        </div>
                    </div>
                    ");
                }
            }else{ 
                foreach ($products as $product) {
                    if ($categoria == $product['categoria']) {
                        echo("
                                <div class='produto'>
                
                                    <div class='imagem_produto'>
                                        <img src='{$product['img']}' alt=''>
                                    </div>
                                    
                                    <div class='texto'>
                                        <p class='nome'>{$product['name']}</p>
                                        <br>
                                        <p class='price'>R$ {$product['price']},00</p>
                                    </div>
                                    
                                    <div class='button'>
                                        <button id='{$product['id']}' onclick=\"carrinho(this.id)\">Adicionar ao carrinho</button>
                                    </div>
                                </div>
                            ");
                    }
                }
            }
                    ?>

    </div>
    <script src="../../assets/js/script.js"></script>
</body>

</html>