<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tìm kiếm</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body class="bg-body">

  <div class="container mt-5">
    <div id="app">

      <div class="row mb-4">
        <div class="col-md-6 offset-md-3">
          <h2 class="text-center">
            <a href="index.php" style="text-decoration: none; color: inherit;">Thêm ảnh</a>
          </h2>

          <div class="input-group">
            <input type="text" id="searchInput" class="form-control" placeholder="Search..." name="q">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary ms-3" type="submit" onclick="search()">Thêm</button>
            </div>
          </div>
        </div>
      </div>

      <div id="phoneList" class="row">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <!-- Add your custom script for AJAX -->
  <script>
    window.onload = function () {
      loadAllProducts();
    };

    function loadAllProducts() {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {

          var laptops = JSON.parse(xhr.responseText);
          displaySearchResults(laptops);

        }
      };

      xhr.open('GET', 'search.php', true);
      xhr.send();
    }

    const IMAGE_REGEX = /(ftp|http|https)?:\/\/([www]\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*).[jpg|jpeg|png|gif]{3}/;


    function search() {
      var searchQuery = document.getElementById('searchInput').value;

      if (!searchQuery.match(IMAGE_REGEX)) {
        alert("Vui lòng nhập đúng định dạng địa chỉ hình ảnh")
        return
      }

      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        console.log('xhr: ', xhr)

        if (xhr.readyState == 4 && xhr.status == 200) {
          // Update the product list with the search results
          var laptops = JSON.parse(xhr.responseText);
          displaySearchResults(laptops);
        }

      };

      xhr.open('GET', 'search.php?q=' + searchQuery, true);
      xhr.send();
    }

    function displaySearchResults(laptops) {
      var carouselInner = document.querySelector('.carousel-inner');

      carouselInner.innerHTML = '';

      laptops.forEach((laptop, index) => {
        var activeClass = index === 0 ? 'active' : '';
        var slideHtml =
          `<div class="carousel-item ${activeClass}">
            <img src="${laptop.image}" class="d-block w-100" alt="image">
          </div>`;

        carouselInner.insertAdjacentHTML('beforeend', slideHtml);
      });
    }
  </script>
</body>

</html>