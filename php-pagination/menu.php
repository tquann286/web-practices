<?php
$result = chayTruyVanTraVeDL($link, "select*from tbl_danhmuc");
while ($rows = mysqli_fetch_assoc($result)) {
  echo " <li><a href='?dm=" . $rows['id'] . "'>" . $rows['ten'] . "</a></li>";
}
?>