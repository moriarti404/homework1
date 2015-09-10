<?php
$cols = rand(1, 10);
$rows = rand(1, 10);

echo '<table border = "1">';

    for ($r = 1; $r <= $rows; $r++){
        echo '<tr>';
        for ($c = 1; $c <= $cols; $c++){
            echo '<td>' . $r*$c . '</td>';
        }
        echo '</tr>';
    }
echo '</table>';
?>



