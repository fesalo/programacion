<?php
    $arr=[1,2,3,5,6,6,7,8,8,9,10,1,11,11];

    $contador=0;
    while($contador<14){
        $i=$contador+1;
        while($i<14){
            if($arr[$contador]==$arr[$i]){
            echo $arr[$contador]. " ";
            }
            $i++;
        }    
        $contador++;
    }

?>