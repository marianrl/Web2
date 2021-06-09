<?php

$productos = array(
        '1' => array(
                'id' => 1,
                'nombre' => "Tarta de Frutilla",
                'disponibilidad' => TRUE,
                'imagen' => 'torta9.jpg',
                'descripcion' => "Tarta de Frutilla rellena con crema pastelera, decorada con crema chantilly",
                'categoria' => 1
        ),

        '2'=> array(
            'id' => 2,
            'nombre' => "Lemon Pie",
            'disponibilidad' => TRUE,
            'imagen' => 'torta7.jpg',
            'descripcion' => "Clásica torta rellena con una suave crema de limón decorada con merengue italiano",
            'categoria' => 1
            
        ),

        '3'=> array(
            'id' => 3,
            'nombre' => "Cannoli",
            'disponibilidad' => TRUE,
            'imagen' => 'torta8.jpg',
            'descripcion' => "Cannoli, podes pedir tu relleno de crema clásica de ricotta o crema pastelera",
            'categoria' => 4
        ),

        '4'=> array(
            'id' => 4,
            'nombre' => "Pan dulces",
            'disponibilidad' => FALSE,
            'imagen' => 'torta10.jpg',
            'descripcion' => "Pan dulce, con frutos secos y fruta abrillantada o con chips de chocolate",
            'categoria' => 4
        ),
        '5'=> array(
            'id' => 5,
            'nombre' => "Cookies navideños",
            'disponibilidad' => FALSE,
            'imagen' => 'cookies1.jpg',
            'descripcion' => "Cookies de limon con glaseado navideño",
            'categoria' => 2
        ),
        '6'=> array(
            'id' => 6,
            'nombre' => "Cookies con chips",
            'disponibilidad' => TRUE,
            'imagen' => 'cookies2.jpg',
            'descripcion' => "Cookies con chips de chocolates",
            'categoria' => 2
        ),
        '7'=> array(
            'id' => 7,
            'nombre' => "Mix de tortas",
            'disponibilidad' => TRUE,
            'imagen' => 'mix1.jpg',
            'descripcion' => "Variedad de mini tortas de 4 gustos iguales o distintos",
            'categoria' => 3
        ),
        '8'=> array(
            'id' => 8,
            'nombre' => "Mix de tortas y galletitas",
            'disponibilidad' => TRUE,
            'imagen' => 'mix2.jpg',
            'descripcion' => "Variedad de mini tortas y galletitas",
            'categoria' => 3
        )
        );

        echo json_encode($productos);
?>