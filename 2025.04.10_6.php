<?php
// function remove_vowels($str) {
//     $remove_str = "";
//     $length = strlen($str);

//     for ($i = 0; $i < $length; $i++) {
//         $s = $str[$i];
//         if (!in_array($s, ["a", "e", "i", "o", "u"])) {
//             $remove_str .= $s;
//         }
//     }

//     return $remove_str;
// }

// echo remove_vowels("hello world"); 

function remove_vowels($text){
    $remove_text = "" ;
    $lenght = strlen($text);

    for($i = 0; $i < $lenght; $i++){
        $s = $text[$i];
        #in_array()	왼쪽 값이 배열 안에 있는지 확인하는 함수
        if(!in_array($s,["a","e","i","o","u"])){
            $remove_text .= $s;
        }
    }
    return $remove_text;
}

echo remove_vowels("hello world"); 

