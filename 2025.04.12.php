<!-- <?php
/**
 *함수의 움직임 분석
 *
 * php역시 함수가 호출된 다음 내부의 코드가 실행됨
 * 그러므로 전역변수임 num은 함수counter가 호출된
 * 시점부터는 이미 $num은 존재하는것이다
 * 주의점 총정리
 * 함수 내 코드는 호출되엇을때 처음 실행됨
 * 함수선언은 프로그램의 실행보다 먼저 준비시킴
 * 이것외에는 위에서부터 코드 실행
 */


// function counter($step =1) {
//     global $num;
//     $num += $step;
//     echo $num;
//     return $num;
// }

// $num = 0;
// counter(2); -->


function counter($step =1) {
    global $num;
    $num += $step;
    echo $num;
    return $num;
}

counter(2);
$num = 0;
