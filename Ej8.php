<?php
    $arr=[
        [1, 5, 8, 5],
        [7, 3, 2, 4],
        [1, 6, 2, 4]
    ];
    $nuevo=[];
    
    $i2=0;
    $c=0;
    while($i2<count($arr[$c])){
        $i=0;
        while($i<count($arr)){
            $nuevo[$i2][$i]=$arr[$i][$i2];
            $i++;
        }
        $i2++;
    }
    foreach($nuevo as $fila){
        $nuevo2[]=implode("-",$fila);
    }
    $var=implode("<br>",$nuevo2);
    echo $var;
    

?>