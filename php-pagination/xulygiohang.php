<?php
session_start();
require_once "cart_module.php";

if (isset($_POST['action'])) {
  switch ($_POST['action']) {

    case "Thêm vào Giỏ":
      $shang = array(
        "id" => $_POST['id'],
        "ten" => $_POST['ten'],
        "gia" => $_POST['gia'],
        "soluong" => 1
      );
      themhangvaogio($shang);
      header("Location: " . $_SERVER['HTTP_REFERER']);
      break;

    case "Cập nhật":
      capnhathangtrongio($_POST['id'], $_POST['soluong']);
      header("Location: " . $_SERVER['HTTP_REFERER']);
      break;

    case "Xóa hàng":
      xoahangkhoigio($_POST['id']);
      header("Location: " . $_SERVER['HTTP_REFERER']);
      break;

    default:
      break;
  }
}
?>