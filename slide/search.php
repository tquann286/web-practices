<?php
require_once("db_module.php");

if (isset($_GET['q'])) {
    $link = mysqli_connect(HOST, USER, PASSWORD, DB);
    $searchQuery = $_GET['q'];


    taoKetNoi($link);

    $searchQuery = mysqli_real_escape_string($link, $searchQuery);
    $query = "INSERT INTO `tbl_slide` (`image`) VALUES ('$searchQuery')";

    $result = chayTruyVanTraVeDL($link, $query);

    $query = "SELECT * FROM tbl_slide";
    $result = chayTruyVanTraVeDL($link, $query);

    // Fetch and return the results as JSON
    $laptops = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $laptops[] = array(
            'image' => $row['image'],
        );
    }


    giaiPhongBoNho($link, $result);

    // Return the results as JSON
    echo json_encode($laptops);
} else {

    taoKetNoi($link);

    $query = "select * FROM tbl_slide";
    $result = chayTruyVanTraVeDL($link, $query);

    // Fetch and return the results as JSON
    $laptops = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $laptops[] = array(
            'image' => $row['image'],
        );
    }


    giaiPhongBoNho($link, $result);


    echo json_encode($laptops);
}
?>