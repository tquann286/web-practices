<?php

if (isset($_GET['dm']))
  $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where id_dm=" . $_GET['dm']);
else
  $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham");
while ($rows = mysqli_fetch_assoc($result)) {
  echo "
<a href='chitiet.php?sp=" . $rows['id'] . "'><div class='sp'>
<h2>" . $rows['ten'] . "</h2>
<p>Mô tả: " . $rows['mota'] . "</p>
<p>Giá: " . $rows['gia'] . "</p>
</div></a>";
}
?>