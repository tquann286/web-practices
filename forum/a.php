<?php
    $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_bantin ORDER BY like_bantin DESC LIMIT 3");

    echo "<table border = '1'>";
    echo "<tr>
            <th>ID bản tin</th>
            <th>Tiêu đề</th>
            <th>Số lượt like</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["id_bantin"] ."</td>";
        echo "<td>" . $row["tieude"] . "</td>";
        echo "<td>" . $row["like_bantin"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>