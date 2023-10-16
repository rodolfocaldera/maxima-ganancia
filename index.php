<?php
    $stocks = [10,9,8,7,6,5,4,3,2,6];

    for($i = 0; $i < count($stocks); $i++){
        if(!is_numeric($stocks[$i])){
            $position = $i+1;
            exit("The value at position ".$position." is not numeric");
        }
    }

    $max = 0;
    $minBuy = $stocks[0];
    for($i = 0; $i < count($stocks); $i++){
        if($stocks[$i] < $minBuy){
            $minBuy = $stocks[$i];
        }
    
        if(($stocks[$i] - $minBuy) > $max){
            $max = $stocks[$i] - $minBuy;
        }
    }

    if($max > 0){
        echo ("The max profit is: ".$max);
    }else{
        echo ("There's no any profit");
    }