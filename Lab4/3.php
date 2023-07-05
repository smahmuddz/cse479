<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
print_r(array_map('strtolower', $Color));
echo "<br>";
print_r(array_map('strtoupper', $Color));
?>
</body>
</html>