<?php


$input = [1,5,2];
$result = [];
for ($i = 0 ;$i < count($input) ;$i++){

    if($input[$i] > $input[$i + 1]){
//        die();
    }
    else{
        $indexOne = $input[$i];
        $indexTwo = $input[$i + 1];

        $input[$i] = $indexTwo;
        $input[$i + 1] = $indexOne;
    }
    array_push($result,$input);
    print_r($result);
//    die();
};
