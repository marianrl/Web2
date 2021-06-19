<?php

function obtenerSubsubcategoria(){
    if(file_exists(DIR_BASE.'array/subCategoria.json')){ 
        $subcategoria = json_decode(file_get_contents(DIR_BASE.'array/subCategoria.json'),TRUE);	
    }else{
        $subcategoria = array();
    }

    return $subcategoria;

}

?>