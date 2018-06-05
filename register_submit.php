<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>나딱뉴스_로그인</title>
  </head>
  <body>
<?php
  $id = $_POST["id"];
  $pw = $_POST["pw"];
  $age = $_POST["age"];
  $status = $_POST["status"];
  echo"<script>alert(\"id: $id pw: $pw  age: $age  status: $status\");location.href=\"register.php\"</script>";
?>
  </body>
</html>
