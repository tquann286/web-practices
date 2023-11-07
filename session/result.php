<?php
    include_once("make.php");
    foreach ($_SESSION['data'] as $category => $products) {
        echo "<li>- $category:</li>";
        echo "<ul>";
                foreach ($products as $product) {
                    echo "<li style='margin-left: 10px'>+ $product</li>";
                }
        echo"</ul>";
    }
?>