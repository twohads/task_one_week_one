<?php

echo "<table>";

for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 10; $col++) {
        if ($row && $col % 2 === 0) {
            echo "<td>" . "(" . $col * $row . ")" . "</td>";
        } else {
            echo "<td>" . "[" . $col * $row . "]" . "</td>";
        }
    }

    echo "</tr>";
};

echo "</table>";
