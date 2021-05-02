<?php

$comentarios = array(
        '1' => array(
                'id' => 1,
                'comentario' => "Tarta de Frutilla rellena con crema pastelera, decorada con crema chantilly"
        ),

        '2'=> array(
            'id' => 2,
            'comentario' => "Clásica torta rellena con una suave crema de limón decorada con merengue italiano"
        ),

        '3'=> array(
            'id' => 3,
            'comentario' => "Cannoli, podes pedir tu relleno de crema clásica de ricotta o crema pastelera"
        ),

        '4'=> array(
            'id' => 2,
            'comentario' => "Pan dulce, con frutos secos y fruta abrillantada o con chips de chocolate"
        )
        );

echo json_encode($comentarios);


?>