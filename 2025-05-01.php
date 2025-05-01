<?php
session_start();

//로그인 안햇으면 로그인 페이지
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 작성란</title>
</head>
<body>
    <h1>글 작성하기</h1>

    <form action="write_process.php" method="post">
        <div>
            <label for="title">제목:</label><br>
            <input type="text" id = "title" name = "title" required >
        </div>

        <div>
            <label for="content">내용:</label><br>
            <textarea id="content" name="content" rows="10" cols="50" required></textarea>
        </div>

        <button type="submit">등록하기</button>

    </form>

    <p><a href="list.php">목록으로 돌아가기</a></p>
</body>
</html>