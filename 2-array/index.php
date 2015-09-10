    <?php
    $arr = [ -2, 4, 16, -32, 7, -5, 3, 12, 5 ];
    $summ = 0;
    $mult = 1;
    foreach($arr as $key => $num){
        if($num > 0) {
            $summ = $summ + $num;
        }
        if($num % 2 == 0) {
            $mult = $mult * $num;
        }
    }
    if($summ == 0){
        echo "There are no positive numbers in the array";
    } else {
        echo ('The summ of positive numbers is ' . $summ . '<br />');
      }
    if($mult == 0){
        echo "There are no even numbers in the array";
    } else {
        echo ('The composition of even numbers is ' . $mult);
    }