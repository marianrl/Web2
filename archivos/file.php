<?php


$fp = fopen("archivo.txt", "w+");

for($i=0; $i<=10; $i++){
    fwrite($fp, "Linea ".$i."\n");
}

fclose($fp);

?>