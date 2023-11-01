<?php
require_once("db_module.php");
if (isset($_POST['iddm']) && isset($_POST['tensp']) && isset($_POST['mota']) && isset($_POST['gia'])) {
  $link = NULL;
  taoketNoi($link);
  $tensp = $_POST['tensp'];
  $mota = $_POST['mota'];
  $gia = $_POST['gia'];
  $iddm = $_POST['iddm'];

  $query = "INSERT INTO tbl_sanpham VALUES (NULL, '$tensp', '$mota', $gia, $iddm)";
  $result = chayTruyVankhongTraVeDL($link, $query);
  giaiPhongBoNho($link, $result);

  if ($result) {
    header("Location: themsp.php?msg-done");
  } else {
    header("Location: themsp.php?msg-fail");
  }
} else {
  header("Location: themsp.php");
}
?>