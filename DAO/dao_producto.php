<?php

function guardarProducto($datos = array()){
     
}

function obtenerProductos(){
    if(file_exists(DIR_BASE.'array/producto.json')){ 
        $producto = json_decode(file_get_contents(DIR_BASE.'array/producto.json'),TRUE);	
    }else{
        $producto = array();
    }

    return $producto;

}

function obtenerProducto($id){
    $producto = obtenerProductos();  
    return $producto[$id];

}

function modificarProducto($datos = array(), $id){
    
}

function borrarProducto($id){
     
}