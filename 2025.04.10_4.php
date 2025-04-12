<?php
function odd_or_even($num) {
    if ($num %2 == 0){
        return "짝수입니다";
    }else{
        return "홀수입니다";
    }
}

echo odd_or_even(4) . "\n";
echo odd_or_even(7). "\n";