<?php
$arr = [ 2, 4, 12, -13, 6, 3, -1, 9, 19, -37, -8 ];
$negative = 0;
$mult = 1;

$b = 3;
$d = 7;

foreach($arr as $key => $num){
    if($num < 0){
        $negative++;
    }
    if(($b < $arr[$key]) and ($arr[$key] > $d)){
        $mult = $mult * $num;
    }
}
if($negative == 0){
    echo "There are no negative numbers in the array";
} else {
    echo('There are ' . $negative . ' negative nmbers in the array <br />');
}
echo('The composition of numbers between ' . $b . '-rd and ' . $d . '-th member of the array is ' . $mult);





