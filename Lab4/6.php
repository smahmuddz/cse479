<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$my_text = 'The quick brown [fox].';
preg_match('/\[(.*?)\]/', $my_text, $match);
print ($match[0]);
?>
</body>
</html>
