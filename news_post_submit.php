<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>나딱뉴스_로그인</title>
  </head>
  <body>
<?php
  $title = $_POST["title"];
  $content = $_POST["content"];
  echo"<script>alert(\"title: $title content: $content\");location.href=\"news_post.php\"</script>";
?>
  </body>
</html>
