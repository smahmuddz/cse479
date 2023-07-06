<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$input = 'H!E@L#L$O% W^O&R*L-D_=+\<>?/].';
$modified = preg_replace('/[^A-Za-z0-9\s]/', '', $input);
echo $input,"<br>",$modified;
?>
</body>
</html>
