<?php

    include("data.php");

    foreach ($data as $product => $brands) {
        echo '<li class="mb-3">
                <a href="?product='.$product.'" class="tab nav-item nav-link cursor-pointer capitalize"> 
                    '.$product.' 
                </a>
            </li>';
    }

?>