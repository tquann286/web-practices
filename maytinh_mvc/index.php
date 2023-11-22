<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm máy tính</title>
    

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
                require_once("Controllers/LaptopController.php");

                $laptopController = new LaptopController();

                if (isset($_GET['q'])) {
                    $searchQuery = $_GET['q'];
                    $laptopController->displaySearchResults($searchQuery);
                } else {
                    $laptopController->displayProducts();
                }
                ?>
            </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
