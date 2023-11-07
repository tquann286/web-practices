<?php
    session_start();

    if (!isset($_SESSION['data'])) {
        $_SESSION['data'] = array();
    }

    //Form 1
    if (isset($_POST['addCategory'])) {
        $category = $_POST['category'];
        $_SESSION['data'][$category] = array();
    }

    //Form 2
    if (isset($_POST['addProduct'])) {
        $category = $_POST['category'];
        $product = $_POST['product'];

        // Kiểm tra xem danh mục đã tồn tại trong session chưa
        if (array_key_exists($category, $_SESSION['data'])) {
            $_SESSION['data'][$category][] = $product;
        }
    }
?>