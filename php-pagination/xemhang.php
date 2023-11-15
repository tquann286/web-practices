<body>
  <?php
  include_once("db_module.php");
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
      <?php
      if (isset($_SESSION['giohang'])) {
        $giohang = $_SESSION['giohang'];
        foreach ($giohang as $k => $v) {
          echo "<form method='post' action='xulygiohang.php'>
                        <input type='hidden' name='id' value='" . $v['id'] . "'>
                        <span>" . $v['ten'] . "</span> | 
                        <input type='text' value='" . $v['soluong'] . "' name='soluong'>
                        <input type='submit' value='Cập nhật'>
                        <input type='submit' value='Xóa hàng'>
                      </form>";
        }
      }
      ?>
    </div>

    <?php
    giaiPhongBoNho($link, $result);
    ?>

  </div>
</body>