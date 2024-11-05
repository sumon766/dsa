<?php

    //Counting Sort Algorithm Practice using PHP
    
    function countingSort($array) {
        $max_val = max($array);

        $count = array_fill(0, $max_val + 1, 0);

        foreach($array as $num) {
            $count[$num]++;
        }

        $sorted = [];
        for($i = 0; $i <= $max_val; $i++) {
            while ($count[$i] > 0) {
                $sorted[] = $i;
                $count[$i]--;
            }
        }

        return $sorted;
    }

    $array = [4, 2, 2, 6, 3, 3, 1, 6, 5, 2, 3];
    $sortedArray = countingSort($array);

    echo "The sorted array is: " . implode(', ', $sortedArray);

?>
