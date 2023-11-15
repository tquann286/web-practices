<?php
$SO_SP_TREN_TRANG = 5;
$Spage = isset($_GET['page']) ? $_GET['page'] : 1;
$Spage = is_numeric($Spage) ? $Spage : 1;
$from = ($Spage - 1) * $SO_SP_TREN_TRANG;

// Xác định tổng số sản phẩm
$queryCount = isset($_GET['keyword'])
  ? "SELECT COUNT(*) FROM tbl_sanpham WHERE ten LIKE '%" . $_GET['keyword'] . "%'"
  : "SELECT COUNT(*) FROM tbl_sanpham";

$resultCount = chayTruyVanTraVeDL($link, $queryCount);
$rowCount = mysqli_fetch_row($resultCount);
$total = ceil($rowCount[0] / $SO_SP_TREN_TRANG);

// Xác định các sản phẩm sẽ hiển thị cho trang hiện tại
$queryProducts = isset($_GET['keyword'])
  ? "SELECT * FROM tbl_sanpham WHERE ten LIKE '%" . $_GET['keyword'] . "%' LIMIT " . $from . ", " . $SO_SP_TREN_TRANG
  : "SELECT * FROM tbl_sanpham LIMIT " . $from . ", " . $SO_SP_TREN_TRANG;

$resultProducts = chayTruyVanTraVeDL($link, $queryProducts);

while ($rows = mysqli_fetch_assoc($resultProducts)) {
  echo "<a href='chitiet.php?sp=" . $rows['id'] . "'><div class='sp'>
    <h2>" . $rows['ten'] . "</h2>
    <p>Mô tả: " . $rows['mota'] . "</p>
    <p>Giá: " . $rows['gia'] . "</p>
    </div></a>";
}

echo "<br style='clear:both;' />";
echo "<nav aria-label='Page navigation'><ul class='pagination'>";
for ($i = 1; $i <= $total; $i++) {
  if ($i != $Spage) {
    if (isset($_GET['keyword'])) {
      echo "<li class='page-item'><a class='page-link' href='./?page=" . $i . "&keyword=" . $_GET['keyword'] . "'>" . $i . "</a></li>";
    } else {
      echo "<li class='page-item'><a class='page-link' href='./?page=" . $i . "'>" . $i . "</a></li>";
    }
  } else {
    echo "<li class='page-item active'><span class='page-link'>" . $i . "</span></li>";
  }
}
echo "</ul></nav>";
?>