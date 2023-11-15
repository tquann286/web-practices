<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("db_module.php");
        $link = NULL;
        taoKetNoi ($link);
    ?>

    <h2>Câu a. Liệt kê các bản tin có số lượt like nhiều nhất (Top 3)</h2>
    <?php include("a.php"); ?>

    <h2>Câu b. Liệt kê các bản tin có chứa từ khóa "công nghệ"</h2>
    <?php include("b.php"); ?>

    <h2>Câu c. Liệt kê các bản tin thuộc danh mục "Giáo dục" và "Đời sống"</h2>
    <?php include("c.php"); ?>

    <h2>Câu d. Liệt kê các bình luận của bản tin có tiêu đề "Sự thay đổi cách thức mua sắm của khách hàng trong thời kì thương mại điện tử"</h2>
    <?php include("d.php"); ?>

    <h2>Câu e. Liệt kê các độc giả đã bình luận bản tin "Thoái trào tất yếu của Apple trước cạnh tranh trên thị trường smartphone" và chứa từ khóa "ngốc nghếch"</h2>
    <?php include("e.php"); ?>

    <h2>Câu f. Đếm số lượt like từng bài viết</h2>
    <?php include("f.php"); ?>

    <h2>Câu g. Thêm mới một bản tin vào danh mục "Công nghệ"</h2>
    <?php include("g.php"); ?>

    <h2>Câu h. Thêm mới một bình luận vào bản tin "Liệu Samsung sẽ thành công với Galaxy S4 hay sẽ rơi vào tình trạng suy giảm sự tin cậy của nhà đầu tư như Apple"</h2>
    <?php include("h.php"); ?>

    <h2>Câu i. Cập nhật nội dung cho bài viết có id là "123"</h2>
    <?php include("i.php"); ?>

    <?php
        giaiPhongBoNho($link, $result);
    ?>
</body>
</html>