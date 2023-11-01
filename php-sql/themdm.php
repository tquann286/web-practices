<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Them dm</title>
</head>

<body>
  <?php
  if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "done")
      echo "<div style='color:white; background-color:green; padding:5px;'>Thêm thành công!</div>";
    else
      echo "<div style='color:white; background-color:red; padding:5px;'>Thêm không thành công!</div>";
  }
  ?>
  <form method="post" action="xulydm.php">
    <label for="tendm">Tên DM:</label>
    <input type="text" name="tendm" /><br /> <input type="submit" value="Thêm DM" />
    <input type="reset" value="Làm Rong" />
  </form>
</body>

</html>