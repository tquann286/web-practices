<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    h1 {
      color: #333;
    }

    form {
      background-color: #fff;
      padding: 20px;
      margin: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: #0074d9;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      background-color: #fff;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    a {
      text-decoration: none;
      color: #0074d9;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <h1>Thêm Danh Mục</h1>
  <form method="post">
    <label for="category">Danh Mục:</label>
    <input type="text" name="category" id="category">
    <button type="submit" name="addCategory">Thêm</button>
  </form>

  <h1>Thêm Sản Phẩm</h1>
  <form method="post">
    <label for="categorySelect">Chọn Danh Mục:</label>
    <select name="category" id="categorySelect">
      <option value="">--Chọn một danh mục--</option>
      <?php include("category_ss.php") ?>
    </select>
    <br>
    <label for="product">Sản Phẩm:</label>
    <input type="text" name="product" id="product">
    <button type="submit" name="addProduct">Thêm</button>
  </form>

  <h1>Danh Sách Danh Mục và Sản Phẩm</h1>
  <ul>
    <?php include("result.php") ?>
  </ul>
  <button><a href="del.php" style="text-decoration:none; color: #fff">Xóa Session</a></button>
</body>

</html>