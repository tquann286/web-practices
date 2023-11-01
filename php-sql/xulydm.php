<?php
require_once("db_module.php");
if (isset($_POST['tendm'])) {
  $link = NULL;
  taoketNoi($link);
  $result = chayTruyVanKhongTraVeDL($link, "insert into tbl_danhmuc values (NULL, " . $_POST['tendm'] . "')");
  giaiPhongBoNho($link, NULL);
  if ($result)
    header("Location: themdm.php?msg=done");
  else
    header("Location: themdm.php?msg=error");
} else
  header("Location: themdm.php");
?>