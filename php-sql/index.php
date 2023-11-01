<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>

<body>
  <?php
  require_once("db_module.php");
  $link = NULL;
  taoKetNoi($link);
  ?>
  <div id="container">
    <div id="banner"></div>
    <div id="menu"><a href="./">Home</a></div>
    <div id="lmenu">
      <ul>
        <?php include_once("menu.php"); ?>
      </ul>
    </div>
    <div id="content">
      <?php include_once("content.php"); ?>
    </div>
  </div>
  <?php
  giaiPhongBoNho($link, $result);
  ?>
</body>

</html>