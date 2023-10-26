<?php
    $arr=[1,2,3,5,6,6,7,8,8,9,10,1,11,11];

    $i=0;
    $ipares=0;
    $inopares=0;
    while($i<count($arr)){
        if($arr[$i]%2==0){
            $pares[$ipares]=$arr[$i];
            $ipares++;
        }else{
            $impares[$inopares]=$arr[$i];
            $inopares++;
        }
        $i++;
    }
    print_r($pares);
    print_r($impares);

?>