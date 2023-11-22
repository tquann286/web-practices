<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm máy tính</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div id="app">
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                <h2 class="text-center"><a href="index.php" style="text-decoration: none; color: inherit;">Tìm kiếm máy tính</a></h2>
                    <form id="searchForm" action="index.php" method="GET">
                        <div class="input-group">
                        <?php
                                $searchQuery = isset($_GET['q']) ? $_GET['q'] : '';                              
                                echo "<input type='text' id='searchInput' class='form-control' placeholder='Search...' name='q' value='$searchQuery'>";
                            ?>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary ms-3" type="submit" name="searchBtn">Tìm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="phoneList" class="row">
                <?php
                    include 'db_module.php';
                    include 'Maytinh.php';

                    // Tạo kết nối đến cơ sở dữ liệu
                    taoKetNoi($link);

                    // Xử lý tìm kiếm nếu có
                    if (isset($_GET['q'])) {
                        $searchQuery = $_GET['q'];
                        $searchQuery = mysqli_real_escape_string($link, $searchQuery);
                        $query = "select * from tbl_maytinh WHERE ten LIKE '%$searchQuery%'";
                    } else {
                        // Nếu không có tìm kiếm, hiển thị tất cả sản phẩm
                        $query = "select * from tbl_maytinh";
                    }

                    // Chạy truy vấn và nhận kết quả
                    $result = chayTruyVanTraVeDL($link, $query);

                    // Hiển thị sản phẩm
                    while ($row = mysqli_fetch_assoc($result)) {
                        $maytinh = new Maytinh($row['id'], $row['ten'], $row['gia'], $row['anh']);
                        $maytinh->displayCard();
                    }

                    // Giải phóng bộ nhớ và đóng kết nối
                    giaiPhongBoNho($link, $result);
                ?>
            </div>
        </div>
    </div>
</body>
</html>
