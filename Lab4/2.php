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
$m=5;
$n=(2*$m)-1;
for($i=$n;$i>0;$i-=2)
{
    for($j=0;$j<$n-$i;$j++)
    {echo "&nbsp";}
    for($j=0;$j<$i;$j++)
    {echo " * ";}
    echo "<br>";
}
for($i=1;$i<=$n;$i+=2)
{
    for($j=0;$j<$n-$i;$j++)
    {echo "&nbsp";}
    for($j=0;$j<$i;$j++)
    {echo " * ";}
    echo "<br>";
}

?>
</body>
</html>