<?php

include("data.php");

$product = isset($_GET['product']) ? $_GET['product'] : null;

if ($product && isset($data[$product])) {
    $brands = $data[$product];
    echo '<div class="row mt-3 w-100 d-flex justify-content-between">';
    foreach ($brands as $brand) {
        echo '<div class="col-lg-4">
                <div class="card mb-4 shadow-sm">
                  <div class="card-body">
                    <p class="card-text text-center">' . $brand . '</p>
                  </div>
                </div>
              </div>';
    }
    '</div>';
} else {
    echo 'Chọn sản phẩm muốn xem.';
}

?>