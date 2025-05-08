<form action="receive.php" method="post">
    <div><
        <input type="text" name="account[id]">
    </div>
    <div><
        <input type="text" name="account[name]">
    </div>
    <div><
        <input type="text" name="account[pwd]">
    </div>
    <!-- 참고로 밸류 부분을 지워도 송신이란 글자가 생겨남 -->
    <input type="submit" value="송신"> 
</form>


<?php

// $students = [
// "1" => [
//     "name" => "taro",
//     "age" => 15,
// ],

// "2" => [
//     "name" => "taro",
//     "age" => 15,
// ],

// "3" => [
//     "name" => "taro",
//     "age" => 15,
// ],

// ];

// $id = $_GET["id"] ?? 1;
// $student = $_students["id"];
// $student = $_students["name"];
// $student = $_students["age"];


