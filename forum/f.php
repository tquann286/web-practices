<?php
    $result = chayTruyVanTraVeDL($link, "SELECT tb.id_bantin, tb.tieude, tb.like_bantin FROM tbl_bantin tb");

    echo "<table border='1'>";
    echo "<tr>
        <th>ID Bài viết</th>
        <th>Tiêu đề</th>
        <th>Lượt thích</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_bantin"] . "</td>";
        echo "<td>" . $row["tieude"] . "</td>";
        echo "<td>" . $row["like_bantin"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>