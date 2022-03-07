
                <?php
                echo "<table>";
                for ($y = 0; $y < $size; $y++) {
                    echo "<tr>";
                    for ($x = 0; $x < $size; $x++) {
                        echo "<td>";
                        if ($karel->x == $x && $karel->y == $y) {
                            echo $karel->toHTML();
                        }

                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
