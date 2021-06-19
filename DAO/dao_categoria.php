<?php
 

function ObtenerCategorias(){
    if(file_exists(DIR_BASE.'array/categoria.json')){ 
        $cats = json_decode(file_get_contents(DIR_BASE.'array/categoria.json'),TRUE);	
    }else{
        $cats = array();
    }

    return $cats;

}