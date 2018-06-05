<!DOCTYPE html>
<html>
  <head>
    <title>나딱뉴스</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {padding: 30px 30px 30px 30px}
    </style>
  </head>
  <body>
    <a href="#" onclick="history.go(-1)">
    <button type="button" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> 뒤로가기
    </button></a>
    <!--php로 DB에서 데이터 받아와서 내용 채워주기-->
    <?php
      $newsID = $_GET["newsID"];
      echo"<script>alert($newsID);</script>"
    ?>
  </body>
</html>
