<?php
require_once ("modules/db_module.php");
require_once ("Models/laptop.php");

class LaptopController {

    public function displayProducts() {
        $link = null;
        taoKetNoi($link);

        $query = "select * from tbl_maytinh";
        $result = chayTruyVanTraVeDL($link, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $maytinh = new Laptop($row['id'], $row['ten'], $row['gia'], $row['anh']);

            echo "<div class='col-md-4'>";
            echo "<div class='card'>";
            echo "<img src='{$maytinh->getAnh()}' class=' img-fluid' alt='Image'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>{$maytinh->getTen()}</h5>";
            echo "<p class='card-text'>Price: {$maytinh->getGia()}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        giaiPhongBoNho($link, $result);
    }

    public function displaySearchResults($searchQuery) {
        $link = null;
        taoKetNoi($link);

        $query = "select * from tbl_maytinh WHERE ten like '%$searchQuery%'";
        $result = chayTruyVanTraVeDL($link, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $maytinh = new Laptop($row['id'], $row['ten'], $row['gia'], $row['anh']);

            echo "<div class='col-md-4'>";
            echo "<div class='card'>";
            echo "<img src='{$maytinh->getAnh()}' class=' img-fluid' alt='Image'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>{$maytinh->getTen()}</h5>";
            echo "<p class='card-text'>Price: {$maytinh->getGia()}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        giaiPhongBoNho($link, $result);
    }
}
?>
