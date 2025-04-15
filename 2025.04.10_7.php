<?php
/**
 * 
 * @param string $student 生徒
 * @param bool $is_absent true:欠席 false:出席
 * @return void
 */

 function attended($student, $is_absent = false) {
    if ($is_absent) {
        echo "{$student}는 결석하고 있습니다\n";
    } else {
        echo "{$student}는 출석하고 있습니다\n";
    }
}

$student1 = "taro";
attended($student1);

$student2 = "taro";
attended($student2 ,true);

$student3 = "hanako";
attended($student3 , true);