<?php

$productos = array(
        '1' => array(
                'id' => 1,
                'nombre' => "Torta Personalizada",
                'disponibilidad' => TRUE,
                'imagen' => 'torta9.jpg',
                'descripcion' => "Tarta de Frutilla rellena con crema pastelera, decorada con crema chantilly",
                'categoria' => 1,
                'subcategoria' => 0
        ),

        '2'=> array(
            'id' => 2,
            'nombre' => "Lemon Pie",
            'disponibilidad' => TRUE,
            'imagen' => 'torta7.jpg',
            'descripcion' => "Clásica torta rellena con una suave crema de limón decorada con merengue italiano",
            'categoria' => 1,
            'subcategoria' => 0
            
        ),

        '3'=> array(
            'id' => 3,
            'nombre' => "Cannoli",
            'disponibilidad' => TRUE,
            'imagen' => 'torta8.jpg',
            'descripcion' => "Cannoli, podes pedir tu relleno de crema clásica de ricotta o crema pastelera",
            'categoria' => 4,
            'subcategoria' => 0
        ),

        '4'=> array(
            'id' => 4,
            'nombre' => "Pan dulces",
            'disponibilidad' => FALSE,
            'imagen' => 'torta10.jpg',
            'descripcion' => "Pan dulce, con frutos secos y fruta abrillantada o con chips de chocolate",
            'categoria' => 4,
            'subcategoria' => 0
        ),
        '5'=> array(
            'id' => 5,
            'nombre' => "Cookies navideñas",
            'disponibilidad' => FALSE,
            'imagen' => 'cookies1.jpg',
            'descripcion' => "Cookies de limon con glaseado navideño",
            'categoria' => 2,
            'subcategoria' => 0
        ),
        '6'=> array(
            'id' => 6,
            'nombre' => "Cookies con chips",
            'disponibilidad' => TRUE,
            'imagen' => 'cookies2.jpg',
            'descripcion' => "Cookies con chips de chocolates",
            'categoria' => 2,
            'subcategoria' => 0
        ),
        '7'=> array(
            'id' => 7,
            'nombre' => "Mix de tortas",
            'disponibilidad' => TRUE,
            'imagen' => 'mix1.jpg',
            'descripcion' => "Variedad de mini tortas de 4 gustos iguales o distintos",
            'categoria' => 3,
            'subcategoria' => 0
        ),
        '8'=> array(
            'id' => 8,
            'nombre' => "Mix de tortas y galletitas",
            'disponibilidad' => TRUE,
            'imagen' => 'mix2.jpg',
            'descripcion' => "Variedad de mini tortas y galletitas",
            'categoria' => 3,
            'subcategoria' => 0
        ),

        '9'=> array(
            'id' => 9,
            'nombre' => "Medialunas",
            'disponibilidad' => TRUE,
            'imagen' => 'medialunas.jpg',
            'descripcion' => "Medialunas Veganas hechas con Margarina",
            'categoria' => 4,
            'subcategoria' => 2
        
        ),

        '10'=> array(
            'id' => 10,
            'nombre' => "Cookies de chocolate sin TACC",
            'disponibilidad' => TRUE,
            'imagen' => 'cookiestacc.jpg',
            'descripcion' => "Cookies marmoladas sin TACC",
            'categoria' => 2,
            'subcategoria' => 1
            
        ),
        '11'=> array(
            'id' => 11,
            'nombre' => "Brownie Vegano",
            'disponibilidad' => TRUE,
            'imagen' => 'vegana.jpg',
            'descripcion' => "Brownie vegano con Crema y Dulce de leche",
            'categoria' => 1,
            'subcategoria' => 2

        )

        );

            echo json_encode($productos);
?>