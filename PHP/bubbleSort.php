<?php
    //Bubble sort algorithm practice

    function bubbleSort($n) {
        for($i = 0; $i < count($n) -1; $i++) {
            $swapped = false;
            for($j = 0; $j < count($n) - $i - 1; $j++) {
                if($n[$j] > $n[$j + 1]) {
                    $temp = $n[$j + 1];
                    $n[$j + 1] = $n[$j];
                    $n[$j] = $temp;
                    $swapped = true;

                    if(!$swapped) {
                        break;
                    }
                }
            }
        }

        return $n;
    }

    print_r(bubbleSort([7, 12, 15, 3, 19, 21, 5, 24, 17]));

?>    