<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "done")
      echo "<div style='color: white; background-color: green; padding: 5px;'>Them thanh cong!</div>";
    else
      echo "<div style='color: white; background-color: red; padding: 5px;'>Them khong thanh cong!</div>";
  }
  require_once("db_module.php");
  ?>

  <form method="post" action="xulysp.php">
    <label for="iddm">Chon DM:</label>
    <select name="iddm">
      <?php
      $Link = NULL;
      taoKetNoi($link);
      $result = chayTruyVanTraVeDL($link, "select * from tbl_danhmuc");
      while ($rows = mysqli_fetch_assoc($result))
        echo "<option value='" . $rows['id'] . "'>" . $rows['ten'] . "</option>";
      ?>
    </select><br />
    <label for="tensp">Ten SP:</label>
    <input type="text" name="tensp"><br />
    <label for="mota">Mo ta:</label>
    <textarea name="mota" style="width: 300px; height: 200px; text-align:left;"></textarea> <br />
    <label for="gia">Gia:</label>
    <input type="number" name="gia"><br />
    <input type="submit" value="Thêm SP">
    <input type="reset" value="Làm Trống">

  </form>

</body>

</html>