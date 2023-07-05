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
for($i=1;$i<11;$i++)
{
    echo "$i";
    $pow=1;
    if($i!=10){
        if($i % 3 == 0) echo "#";
        // elseif (pow(2,$i) % $i == 0) 
        // {
        //     echo "-";
        //     $pow++;
        // }
        elseif($i % 2 == 1) echo "-";
        else echo "_";
    }
}
?>
</body>
</html>