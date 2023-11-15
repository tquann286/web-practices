<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Untitled Document</title>
</head>

<body>
  <?php
  require_once("db_module.php");
  $link = NULL;
  taoKetNoi($link);
  ?>
  <div id="container">
    <div id="banner"></div>
    <div id="menu">
      <?php include_once("task.php"); ?>
    </div>
    <div id="lmenu">
      <div>
        <?php include_once("menu.php"); ?>
      </div>
      <div>
        <?php include_once("cart.php"); ?>
      </div>
    </div>
    <div id="content">
      <?php include_once("content_tk.php"); ?>
    </div>
  </div>
  <?php
  giaiPhongBoNho($link, $result);
  ?>
</body>

</html>