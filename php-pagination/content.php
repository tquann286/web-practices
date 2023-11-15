<?php

$SO_SP_TREN_TRANG = 10; // Số sản phẩm trên mỗi trang
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$page = is_numeric($page) ? $page : 1;
$from = ($page - 1) * $SO_SP_TREN_TRANG;

// Xác định tổng số sản phẩm
if (isset($_GET['dm'])) {
  $result = chayTruyVanTraVeDL($link, "SELECT COUNT(*) FROM tbl_sanpham WHERE id_dm = " . $_GET["dm"]);
} else {
  $result = chayTruyVanTraVeDL($link, "SELECT COUNT(*) FROM tbl_sanpham");
}
$row = mysqli_fetch_row($result);
$total = ceil($row[0] / $SO_SP_TREN_TRANG);

// Xác định các sản phẩm lần hiển thị cho trang hiện tại
if (isset($_GET['dm'])) {
  $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_sanpham WHERE id_dm = " . $_GET['dm'] . " LIMIT " . $from . ", " . $SO_SP_TREN_TRANG);
} else {
  $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_sanpham LIMIT " . $from . ", " . $SO_SP_TREN_TRANG);
}

while ($rows = mysqli_fetch_assoc($result)) {
  echo "<a href='chitiet.php?sp=" . $rows['id'] . "'><div class='sp'>
    <h2>" . $rows['ten'] . "</h2>
    <p>Mô tả: " . $rows['mota'] . "</p>
    <p>Giá: " . $rows['gia'] . "</p>
    </div></a>";
}

echo "<br style='clear:both;' />";
echo "<div class='pager'>";
for ($i = 1; $i <= $total; $i++) {
  if ($i == $page)
    echo "<span>" . $i . "</span>";
  else {
    if (isset($_GET['dm']))
      echo "<a href='./?page=" . $i . "&dm=" . $_GET['dm'] . "'>" . $i . "</a>";
    else
      echo "<a href='./?page=" . $i . "'>" . $i . "</a>";
  }
}
echo "</div>";
?>
<style>
  .pager {
    background-color: orange;
    padding: 3px;
    text-align: center;
    margin-top: 45px;
    margin-left: 5px;
    word-spacing: 10px;
  }
</style>