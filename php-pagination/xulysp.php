<?php
require_once("db_module.php");

if (isset($_POST['iddm']) && isset($_POST['tensp']) && isset($_POST['mota']) && isset($_POST['gia'])) {
  $link = NULL;
  taoKetNoi($link);
  $result = chayTruyVanKhongTraVeDL($link, "insert into tbl_sanpham values(NULL, '" . $_POST['tensp'] . "', '" . $_POST['mota'] . "', '" . $_POST['gia'] . "', '" . $_POST['iddm'] . ")");
  giaiPhongBoNho($link, $result);
  if ($result) {
    header("Location: themsp.php?msg=done");
  } else {
    header("Location: themsp.php?msg=fail");
  }
} else {
  header("Location: them.php");
}