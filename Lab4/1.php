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
$sum=0;
$prime=1000;
while($prime<=3000)
{
$count=0;
for($i=1;$i<=$prime;$i++)
    {
     if(($prime % $i)==0)
     {$count++;}   
    }
    if($count<=2)
    {
    echo $prime,"<br>";
    $sum+=$prime;
    }
$prime++;
}

echo "<br>The Sum of all prime is: $sum";

?>
</body>
</html>
