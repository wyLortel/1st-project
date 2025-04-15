<?php
/**
 * 
 * @param string $student 生徒
 * @param bool $is_absent true:欠席 false:出席
 * @return void
 */

function counter($step = 1){
    global $num;
    $num += $step;
    echo $num;
    return $num;
}

$num = 0;

counter(2);
counter(4);