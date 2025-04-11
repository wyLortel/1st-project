<?php

use LDAP\Result;

// $char = "ZAabd12_sscc";
// if(preg_match("/.+/i" , $char , $result)) {
//     echo"검색 성공";
//     print_r($result);
// } else{
//     echo "검색실패";
// }


$zip_codes = [
    "001-0012",   // OK
    "001-001",    // NG
    "2.2-3042",   // NG
    "wd3-2132",   // NG
    "124-56789"   // NG
];

foreach($zip_codes as $code){
    if(preg_match("/^\d{3}-\d{4}$/", $code)){
        echo "$code →  OK\n";
    } else {
        echo "$code →  NG\n";
    }
}

$emails = [
    "example000@gmail.com",     // OK
    "example-0.00@gmail.com",   // OK
    "example-0.00@ex.co.jp",    // OK
    "example/0.00@ex.co.jp"     // NG
];

foreach($emails as $email){
    if(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)){
        echo "$email →  OK\n";
    } else {
        echo "$email →  NG\n";
    }
}