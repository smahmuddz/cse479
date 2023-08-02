<?php
function jaccardsim($s1, $s2) {
    $inp1= explode(' ', $s1[0]);
    $inp2= explode(' ', $s2[0]);
    print_r($inp1);
    print_r($inp2);
    $intersection = count(array_intersect($inp1, $inp2));
    $union = count(array_unique(array_merge($inp1, $inp2)));
    echo "Union: ".$union."<br>";
    echo "Intersection: ".$intersection."<br>";
    return $intersection / $union;
}

function readWordsFromFile($file) {
    $file = fopen($file, 'r');
    $words = array();
    while (!feof($file)) {
        $word = trim(fread($file,1024));
        if (!empty($word)) {
            $words[] = $word;
        }
    }
    fclose($file);
    return $words;
}

$f1 = 'f1.txt';
$f2 = 'f2.txt';
$w1 = readWordsFromFile($f1);
$w2 = readWordsFromFile($f2);

// for Testing
// $w3 = ['hello','world','i','am'];
// $w4 = ['hello','world'];

$sim = jaccardsim($w1, $w2);

echo "Jaccard sim: " . $sim;
?>
