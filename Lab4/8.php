<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<table style='border-collapse: collapse; border: 2px solid black;'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td style='border: 2px solid black;padding:2px'>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>


</body>
</html>
