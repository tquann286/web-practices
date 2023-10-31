<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <title>PHP Shop</title>
  <script>
    var categories = <?php echo json_encode($categories); ?>;

    function selectCategory(category) {
      document.location.href = "?category=" + category;
    }
  </script>
</head>

<body>
  <div class="container-fluid vh-100">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="sidebar-sticky pt-3">
          <h6 class="sidebar-heading d-flex align-items-center px-3 mt-4 mb-1 text-muted">
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Chọn sản phẩm">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-shopping-cart">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
            </a>
            <span class="ml-2">Sản phẩm</span>
          </h6>
          <ul id="product" class="app-sidebar nav flex-column mb-2">
            <?php include "product.php"; ?>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-md-start pt-3 mb-3">
          <?php include "heading.php"; ?>
        </div>
        <hr />
        <div class="brand row ml-1 w-100">
          <?php include "brand.php"; ?>
        </div>
      </main>
    </div>
  </div>
</body>

</html>