<?php 
function additionner(float $val1,float $val2){
    return $val1+$val2;
}

function soustraire(float $val1,float $val2){
    return $val1-$val2;
}
function multiplier(float $val1,float $val2){
    return $val1*$val2;
}
function diviser(float $val1,float $val2){
    if($val1==0 or $val2 ==0){
        return;
    }
    else{
        return $val1/$val2;
    }
}


echo (multiplier(4,7));




?>