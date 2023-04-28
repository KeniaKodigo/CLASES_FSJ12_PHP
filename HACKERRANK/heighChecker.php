<?php



function heighChecker($arreglo){
    //primer paso
    $array_desordenado = $arreglo;
    //segundo paso
    sort($arreglo);
    $array_order = [];
    $j = 0;
    foreach($arreglo as $arr){
        //echo $arr; //1,1,1,2,3,4
        $array_order[] = $arr;
    }
    //count() => calcula el tamaño del arreglo
    for($i=0; $i < count($array_desordenado); $i++){
        //array_desordenado[4] != array_order[4]
        if($array_desordenado[$i] != $array_order[$i]){ 
            $j++; //4
        }
    }
    echo $j; //4

    //print_r($array_desordenado);
}

$heights = [5,4,1,5,2]; //1,2,4,5,5
heighChecker($heights);

?>