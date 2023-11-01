<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>

<body>
  <?php
  if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "done")
      echo "<div style='color:white; background-color:green; padding:5px;'>Thêm thành công!</div>";
    else
      echo "<div style='color:white; background-color:red; padding:5px;'>Thêm không thành công!</div>";
  }
  require_once("db_module.php");
  ?>
  <form method="post" action="xulysp.php">
    <label for="iddm">Chon DM:</label>
    <select name="iddm">
      <?php
      $link = NULL;
      taoketNoi($link);
      $result = chayTruyVanTraVeDL($link, "select * from tbl_danhmuc");
      while ($rows = mysqli_fetch_assoc($result))
        echo "<option value='" . $rows['id'] . "'" . $rows['ten'] . "</option>";
      ?>
    </select><br />
    <label for="tensp">Tên SP:</label>
    <input type="text" name="tensp"><br />
    <label for="mota">Mô tả:</label>
    <textarea name="mota" style="width:300px; height:200px; text-align:left;">
</textarea><br />
    <label for="gia">Giá:</label>
    <input type="number" name="gia"><br />
    <input type="submit" value="Them SP">
    <input type="reset" value="Làm Trống">
  </form>
</body>

</html>