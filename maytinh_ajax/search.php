<?php
require_once("db_module.php");

if (isset($_GET['q'])) {
    $searchQuery = $_GET['q'];


    taoKetNoi($link);

    $searchQuery = mysqli_real_escape_string($link, $searchQuery);
    $query = "select * FROM tbl_maytinh WHERE ten LIKE '%$searchQuery%'";
    $result = chayTruyVanTraVeDL($link, $query);

    // Fetch and return the results as JSON
    $laptops = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $laptops[] = array(
            'id' => $row['id'],
            'ten' => $row['ten'],
            'gia' => $row['gia'],
            'anh' => $row['anh'],
            'luot_mua' => $row['luot_mua']
        );
    }


    giaiPhongBoNho($link, $result);

    // Return the results as JSON
    echo json_encode($laptops);
} else {

    taoKetNoi($link);

    $query = "select * FROM tbl_maytinh";
    $result = chayTruyVanTraVeDL($link, $query);

    // Fetch and return the results as JSON
    $laptops = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $laptops[] = array(
            'id' => $row['id'],
            'ten' => $row['ten'],
            'gia' => $row['gia'],
            'anh' => $row['anh'],
            'luot_mua' => $row['luot_mua']
        );
    }


    giaiPhongBoNho($link, $result);


    echo json_encode($laptops);
}
?>