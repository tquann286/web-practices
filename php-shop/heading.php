<?php

    include("data.php");

    if (isset($_GET['product'])) {
        $headProduct = $_GET['product'];
        echo '<h2 class="product-heading">' . $headProduct . '</h2>';
    } else {
        echo '<h2 class="product-heading">Trang chủ</h2>';
    }

?>