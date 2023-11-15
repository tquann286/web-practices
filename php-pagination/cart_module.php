<?php
// Khai báo hàm thêm hàng vào giỏ
function themhangvaogio($hang)
{
    if (isset($_SESSION['giohang'])) {
        $giohang = $_SESSION['giohang'];
        if (!array_key_exists($hang["id"], $giohang)) {
            $giohang[$hang["id"]] = $hang;
            $_SESSION['giohang'] = $giohang;
        }
    } else {
        $_SESSION['giohang'][$hang["id"]] = $hang;
    }
}

// Khai báo hàm xóa hàng khỏi giỏ
function xoahangkhoigio($key)
{
    if (isset($_SESSION['giohang'])) {
        $giohang = $_SESSION['giohang'];
        unset($giohang[$key]);
        $_SESSION['giohang'] = $giohang;
    }
}

// Khai báo hàm cập nhật số lượng hàng trong giỏ
function capnhathangtrongio($key, $soluong)
{
    if (isset($_SESSION['giohang'])) {
        $giohang = $_SESSION['giohang'];
        $giohang[$key]['soluong'] = $soluong;
        $_SESSION['giohang'] = $giohang;
    }
}

// Khai báo hàm tính tổng tiền trong giỏ
function tinhtien()
{
    $sum = 0;
    if (isset($_SESSION['giohang'])) {
        $giohang = $_SESSION['giohang'];
        foreach ($giohang as $v) {
            $sum += $v['soluong'] * $v['gia'];
        }
    }
    return number_format($sum);
}
?>