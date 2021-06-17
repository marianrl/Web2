<?php

$subCategoria = array(
        '1' => array(
                'id' => 1,
                'subCategoria' => "Sin Tacc"
        ),
        '2' => array(
                'id' => 2,
                'subCategoria' => "Vegano"
        ),
        '3' => array(
                'id' => 3,
                'subCategoria' => "Sin Lactosa"
        ),
        '4' => array(
                'id' => 3,
                'subCategoria' => "Con leche de Soja"
        )
        );
echo json_encode($subCategoria);

?>