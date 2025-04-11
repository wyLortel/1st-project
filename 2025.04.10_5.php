<?php

function filer_even($arr){
    $new_arr = [];
    foreach($arr as $a){
        if ($a % 2 == 0) {
            $new_arr[] = $a;
        }
    }
    return $new_arr;
}

print_r(filter_even([1, 2, 3, 4, 5]));