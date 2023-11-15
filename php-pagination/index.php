<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="./style.css" />
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>