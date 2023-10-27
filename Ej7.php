<?php
    $arr=[2, 5, 7, 0, 4, 0, 7, -5, 8, 0];
    $var=implode("-",$arr); 
    echo "Array inicial: $var <br>";
    $contador=0;
    $ceros=0;
    while($contador<count($arr)){
        if($arr[$contador]==0){
            array_splice($arr,$contador,1);
            $ceros++;
        }
        $contador++;
    }
    $i=0;
    while($i<$ceros){
        array_push($arr,0);
        $i++;
    }
    $var=implode("-",$arr); 
    echo"Array final: $var <br>";
?>