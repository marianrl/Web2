<?php

function guardarComentario($datos = array()){
    $comentarios = obtenerComentarios(); 
    /*var_dump($comentarios);die();*/
    $comentarios[date('Ymdhisu')] = array(
        'nombre' => $datos['nombre'],
        'comentario' => $datos['comentario'],
        'producto' => $datos['producto'],
        'fecha' => date('H:i:s d-m-Y')
    ); 
    $fp = fopen('array/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);

}

function obtenerComentarios(){
    if(file_exists(DIRE_BASE.'array/comentarios.json')){ 
        $comentarios = json_decode(file_get_contents(DIRE_BASE.'array/comentarios.json'),TRUE);	
    }else{
        $comentarios = array();
    }

    return $comentarios;

}

function obtenerComentario($id){
    $comentarios = obtenerComentarios();  
    return $comentarios[$id];

}

function modificarComentario($datos = array(), $id){
    $comentarios = obtenerComentarios(); 
    $comentarios[$id] = array(
        'nombre' => $datos['nombre'],
        'comentario' => $datos['comentario'],
        'email' => $datos['email'],
        'producto' => $datos['producto'],
        'fecha' => date('H:i:s d-m-Y')
    );
    $fp = fopen(DIRE_BASE.'array/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}

function borrarComentario($id){
    $comentarios = obtenerComentarios(); 
    unset($comentarios[$id]);
    $fp = fopen(DIRE_BASE.'array/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}