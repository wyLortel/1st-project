<?php

function get_grade( $grade ) {
    $sum = 0;

    foreach ( $grade as $score) {
        $sum += $score;
    }

    $averages = $sum / count( $grade );
    $result = "";
    
    if ($averages >= 90){
        $result = "A";
    } elseif ($averages >= 80){
        $result = "B";
    } elseif ($averages >= 70){
        $result = "C";
    } elseif ($averages >= 60){
        $result = "D";
    } else{
        $result = "F";
    }
    return $result;
}

echo get_grade([80, 90, 100]);
