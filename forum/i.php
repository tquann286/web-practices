<?php
    $new_content = "Nội dung mới cập nhật cho bài viết";
    $sql = "UPDATE tbl_dangbai SET ghichu = '$new_content' WHERE id_vietbai = 123";
    $result = chayTruyVanTraVeDL($link, $sql);
        echo "Nội dung đã cập nhật thành công.";
    
    $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_dangbai WHERE id_vietbai = 123");

    echo "<table border='1'>
    <tr>
        <th>ID bài viết</th>
        <th>ID bản tin</th>
        <th>ID người dùng</th>
        <th>Thời gian</th>
        <th>Tình trạng</th>
        <th>Ghi chú</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_vietbai"] . "</td>";
        echo "<td>" . $row["id_bantin"] . "</td>";
        echo "<td>" . $row["id_nguoidung"] . "</td>";
        echo "<td>" . $row["thoigian"] . "</td>";
        echo "<td>" . $row["tinhtrang"] . "</td>";
        echo "<td>" . $row["ghichu"] . "</td>"; 
        echo "</tr>";
    }

    echo "</table>";
?>