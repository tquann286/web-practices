<?php
    $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_bantin WHERE tukhoa LIKE 'congnghe'");

    // borderColor='red';
    echo "<table border='1'>";
    echo "<tr>
            <th>ID bản tin</th>
            <th>Tiêu đề</th>
            <th>Từ khóa</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id_bantin"] . "</td>";
        echo "<td>" . $row["tieude"] . "</td>";
        echo "<td>" . $row["tukhoa"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>