<?php
    $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_bantin b 
    JOIN tbl_danhmuc d ON b.id_danhmuc = d.id_danhmuc 
    WHERE d.ten_danhmuc IN ('Giáo dục', 'Đời sống')");

    echo "<table border='1'>";
    echo "<tr>
            <th>ID bản tin</th>
            <th>Tiêu đề</th>
            <th>ID danh mục</th>
            <th>Tên danh mục</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id_bantin"] . "</td>";
        echo "<td>" . $row["tieude"] . "</td>";
        echo "<td>" . $row["id_danhmuc"] . "</td>";
        echo "<td>" . $row["ten_danhmuc"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>