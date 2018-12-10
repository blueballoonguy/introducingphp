<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
    <tr>
        <th>&nbsp;</th>
        <?php
            // for the header row
            for ($i = 1; $i < 13; $i++) {
                echo "<th>$i</th>";
            }
        ?>
    </tr>
    <?php
        // Loop for table rows and calulations
        for ($i = 1; $i < 13; $i++) {
            echo "<tr>"; // starting a new row with a header column
            echo "<th>$i</th>";
            // then loop through the cells on the row outputting td tags
            for ($j = 1; $j < 13; $j++) {
              echo '<td>' . $i * $j . '</td>';
            }
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>
