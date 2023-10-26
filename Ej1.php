<?php
    $arr=[1,2,3,6,8,9,4,2];

    $contador=1;
     while($contador<=count($arr)){
        $num=$arr[count($arr)-$contador];
        echo " $num ";
        $contador++;
     }

?>