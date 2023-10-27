<?php
    $arr=[1,2,3,5,6,6,7,8,8,9,10,1,11,11];
    $nuevo=[];
    $i=0;
    $c=0;
    
    for($i;$i<count($arr);$i++){
        if(!in_array($arr[$i],$nuevo)){
            $nuevo[$c]=$arr[$i];
            $c++;
            $veces=1;
            for($v=$i+1;$v<count($arr);$v++){
                if($arr[$i]==$arr[$v]){
                    $veces++;
                }
            }
            echo "El numero $arr[$i] aparece $veces veces. <br>";
        }
    }
    print_r($nuevo);

    /* $valores=array_count_values($arr);
    print_r($valores); */


    
?>