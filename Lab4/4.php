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
$my_array=array(10,20,50,70,30,60,40,80);
print_r($my_array);
$n = sizeof($my_array);
for($i = 0; $i < $n; $i++)
{
for ($j = 0; $j < $n - $i - 1; $j++)
{
if ($my_array[$j] < $my_array[$j+1])
{
$temp = $my_array[$j];
$my_array[$j] = $my_array[$j+1];
$my_array[$j+1] = $temp;
}
}
}
echo "<br>";
print_r($my_array);
?>
</body>
</html>