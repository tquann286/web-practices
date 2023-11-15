<?php
    $result = chayTruyVanTraVeDL($link, "SELECT dg.hoten, bl.noidung
    FROM tbl_docgia dg
    JOIN tbl_binhluan bl ON dg.id_docgia = bl.id_docgia
    JOIN tbl_bantin bt ON bl.id_bantin = bt.id_bantin
    WHERE bt.tieude = 'Thoái trào tất yếu của Apple trước cạnh tranh trên thị trường smartphone'
    AND bl.noidung LIKE '%ngốc nghếch%'
    ORDER BY dg.hoten");

    echo "<table border='1'>";
    echo "<tr>
            <th>Tên độc giả</th>
            <th>Nội dung đã bình luận</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["hoten"] . "</td>
                <td>" . $row["noidung"] . "</td>
            </tr>";
    }
    echo "</table>";
?>