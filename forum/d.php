<?php
    $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_binhluan 
    WHERE id_bantin = (SELECT id_bantin FROM tbl_bantin WHERE tieude = 'Sự thay đổi cách thức mua sắm của khách hàng trong thời kì thương mại điện tử')");

    echo "<table border='1'>
    <tr>
        <th>ID Bình luận</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Like Bình luận</th>
        <th>Thời gian</th>
        <th>ID Bản tin</th>
        <th>ID Độc giả</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>" . $row["id_binhluan"] . "</td>
        <td>" . $row["tieude"] . "</td>
        <td>" . $row["noidung"] . "</td>
        <td>" . $row["like_binhluan"] . "</td>
        <td>" . $row["thoigian"] . "</td>
        <td>" . $row["id_bantin"] . "</td>
        <td>" . $row["id_docgia"] . "</td>
    </tr>";
    }
    echo "</table>";
?>