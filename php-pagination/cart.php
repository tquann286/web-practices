<h3>Giỏ hàng</h3>
<?php
include_once("cart_module.php");
$giohang = isset($_SESSION['giohang']) ? $_SESSION['giohang'] : array();
echo "Có <font color='yellow'>" . count($giohang) . "</font> sản phẩm<br/>";
echo "Tổng <font color='yellow'>" . (isset($_SESSION['giohang']) ? tinhtien() : "0") . "</font> VNĐ";
echo "<p><a href='./xemhang.php'>Xem Giỏ Hàng</a></p>";
?>