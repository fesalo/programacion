<?php
    $arr=[1,2,3,5,6,6,7,8,8,9];
    $posAlta=0;
    $posBaja=0;
    $notaAlta=0;
    $notaBaja=10;
    $suma=0;
    $media=0;
    $i=0;

    while($i<count($arr)){
        if($arr[$i]>$notaAlta){
            $notaAlta=$arr[$i];
            $posAlta=$i;
        }
        if($arr[$i]<$notaBaja){
            $notaBaja=$arr[$i];
            $posBaja=$i;
        }
        $i++;
    }
    echo " Nota alta: $notaAlta, posición: $posAlta. Nota baja: $notaBaja, posición: $posBaja";
    array_slice($arr,0,1);
    array_splice($arr,9,1);
    print_r($arr);
    
    

?>