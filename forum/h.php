<?php
    $tieude = "Bình luận mới";
    $noidung = "Vừa đăng bình luận mới";
    $like_binhluan = 0;
    $thoigian = "2023-11-07"; 
    $id_bantin = 4;
    $id_docgia = 1;

    $sql = "INSERT INTO tbl_binhluan (tieude, noidung, like_binhluan, thoigian, id_bantin, id_docgia) VALUES ('$tieude', '$noidung', '$like_binhluan', '$thoigian', '$id_bantin', '$id_docgia')";
    $result = chayTruyVanTraVeDL($link, $sql);
        echo "Bình luận mới đã được thêm thành công.";
    
    $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_binhluan");

    echo "<table border='1'>
    <tr>
        <th>ID bình luận</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Lượt thích</th>
        <th>Thời gian</th>
        <th>ID bản tin</th>
        <th>ID đọc giả</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_binhluan"] . "</td>";
        echo "<td>" . $row["tieude"] . "</td>";
        echo "<td>" . $row["noidung"] . "</td>";
        echo "<td>" . $row["like_binhluan"] . "</td>";
        echo "<td>" . $row["thoigian"] . "</td>";
        echo "<td>" . $row["id_bantin"] . "</td>";
        echo "<td>" . $row["id_docgia"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>