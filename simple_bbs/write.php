<?php
  require_once('config.php');

  $sql = "SELECT * FROM bbs";
  $result = mysqli_query($mysqli, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Simple BBS</title>
</head>
<body>
  <h1>Simple BBS</h1>
  <ul>

    <!-- <li><a href="">글제목1</a><a href="">수정</a><a href="">삭제</a></li> -->

  </ul>
  <p>
  <a href="write.php">글쓰기</a> 
  </p>
  <hr>
  <form action="">
    <input type="search">
    <button>검색</button>
  </form>
</body>
</html>
