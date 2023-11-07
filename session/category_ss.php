<?php
    include("make.php");
    foreach ($_SESSION['data'] as $category => $products) {
        echo "<option value=\"$category\">$category</option>";
    }
?>