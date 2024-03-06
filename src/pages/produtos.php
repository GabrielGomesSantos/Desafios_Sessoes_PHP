<?php 
    session_start();

    $products = [
        ['id' => 1, 'name' => 'Placa Mãe LGA1151', 'description' => 'Placa-mãe compatível com processadores LGA1151, oferecendo desempenho estável e recursos avançados para o seu sistema.', 'price' => 300.00, 'img' => '../../assets/image/placa-mae.png', 'categoria' => 'peca'],
        ['id' => 2, 'name' => 'Memória RAM 8GB DDR4', 'description' => 'Módulo de memória DDR4 de 8GB para melhorar a velocidade e a eficiência do seu sistema, proporcionando uma experiência mais fluida.', 'price' => 300.00, 'img' => '../../assets/image/memoria-ram-notebook.png', 'categoria' => 'peca'],
        ['id' => 3, 'name' => 'Teclado Mecânico Switch Red', 'description' => 'Teclado mecânico com switches Red, proporcionando uma experiência de digitação rápida e precisa, ideal para gamers e profissionais exigentes.', 'price' => 300.00, 'img' => '../../assets\image\teclado.png', 'categoria' => 'periferico'],
        ['id' => 4, 'name' => 'Computador Designer Gráfico', 'description' => 'Computador otimizado para design gráfico, equipado com hardware de alta performance para lidar com as demandas intensivas de programas de design.', 'price' => 8500.00, 'img' => '../../assets\image\gabinete-pc.png', 'categoria' => 'computadores'],
        ['id' => 5, 'name' => 'Notebook Maçã Mk1', 'description' => 'Notebook da marca Maçã modelo Mk1, combinação de design elegante e desempenho avançado para atender às suas necessidades diárias.', 'price' => 10500.00, 'img' => '../../assets\image\notebook.png', 'categoria' => 'computadores'],
        ['id' => 6, 'name' => 'Monitor Dell 24’', 'description' => 'Monitor Dell de 24 polegadas, oferecendo cores vibrantes e imagens nítidas para uma experiência visual envolvente em qualquer aplicação.', 'price' => 200.00, 'img' => '../../assets\image\monitor-pc.png', 'categoria' => 'periferico'],
        ['id' => 7, 'name' => 'Impressora Laser', 'description' => 'Impressora laser de alta velocidade para documentos, proporcionando impressões rápidas e de alta qualidade para suas necessidades de escritório.', 'price' => 2500.00, 'img' => '../../assets\image\impressora.png', 'categoria' => 'periferico'],
        ['id' => 8, 'name' => 'Tablet Multilaser', 'description' => 'Tablet da marca Multilaser, perfeito para entretenimento e produtividade em movimento, com recursos avançados e design portátil.', 'price' => 10.00, 'img' => '../../assets\image\tablet.png', 'categoria' => 'mobile'],
        ['id' => 9, 'name' => 'Smartphone Samcat A22', 'description' => 'Smartphone da marca Samcat modelo A22, oferecendo desempenho confiável e recursos avançados para atender às suas necessidades diárias de comunicação.', 'price' => 200.00, 'img' => '../../assets\image\smartphone.png', 'categoria' => 'mobile'],
        ['id' => 10, 'name' => 'Mouse 10 pila', 'description' => 'Mouse por 10 reais, uma opção acessível e funcional para suas tarefas diárias de computação.', 'price' => 10.00, 'img' => '../../assets\image\mouse.png', 'categoria' => 'periferico'],
    ];
    
    $_SESSION['produtos'] = $products;  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Imagem - Peças</p>
        <?php 
            foreach ($products as $product) {
                echo("
                        <div class='imagem_produto'>
                            <img src='{$product['img']}' alt=''>
                        </div>
                
                
                    <div class='texto'>
                        <p>{$product['name']}</p>
                
                        <p>R$ {$product['price']}</p>
                    </div>
                
                    <div class='button'>
                        <button>Adicionar ao carrinho</button>
                    </div>

                ");
            }
        ?>
</body>
</html>