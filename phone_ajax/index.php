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
                    <h2 class="text-center">
                        <a href="index.php" style="text-decoration: none; color: inherit;">Tìm kiếm máy tính</a>
                    </h2>
                    <div class="input-group">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search..." name="q">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary ms-3" type="submit" onclick="search()">Tìm</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="phoneList" class="row">
                
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Add your custom script for AJAX -->
    <script>
         window.onload = function () {
            loadAllProducts();
        };

        function loadAllProducts() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var phones = JSON.parse(xhr.responseText);
                    displaySearchResults(phones);
                }
            };

            xhr.open('GET', 'search.php', true);
            xhr.send();
        }

        function search() {
            var searchQuery = document.getElementById('searchInput').value;

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the product list with the search results
                    var phones = JSON.parse(xhr.responseText);
                    displaySearchResults(phones);
                }
            };

            xhr.open('GET', 'search.php?q=' + searchQuery, true);
            xhr.send();
        }

        function displaySearchResults(phones) {
            var phoneList = document.getElementById('phoneList');
            phoneList.innerHTML = '';

            phones.forEach((phone) => {
                var cardHtml =
                    `<div class='col-md-4'>
                        <div class='card'>
                            <img src='${phone.anh}' class='card-img-top' alt='image'>
                            <div class='card-body'>
                                <h5 class='card-title'>${phone.ten}</h5>
                                <p class='card-text'>Price: ${phone.gia}</p>
                            </div>
                        </div>
                    </div>`;

                phoneList.innerHTML += cardHtml;
            });
        }
    </script>
</body>
</html>
