<?php

function bubbleLetras($array){

    for($i = 0; $i < count($array); $i++){
        for($j=0; $j < count($array) - 1; $j++){
            //condicionando el tamaño de las cadenas de cada posicion del arreglo
            /**
             * ["melocoton","fresas","uva","mangos","coco"]
             * 
             * array[0] => "melocoton" => 9 caracteres
             * array[1] => "fresas" => 6
             * 
             */
            if(strlen($array[$j]) > strlen($array[$j + 1])){
                $temporal = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temporal;
            }
        }
    }

    print_r($array);
}

bubbleLetras(["melocoton","fresas","uva","mangos","coco"]);


?>