<?php
    //Selection sort algorithm practice

    function selectionSort($arr) {
        $n = count($arr);

        for($i = 0; $i < $n; $i++) {
            $min_index = $i;
            for($j = $i + 1; $j < $n; $j++) {
                if($arr[$j] < $arr[$min_index]) {
                    $min_index = $j;
                }
            }

            $temp = $arr[$i];
            $arr[$i] = $arr[$min_index];
            $arr[$min_index] = $temp;
        }

        return $arr;
    }

    print_r(selectionSort([7, 12, 5, 13, 3, 18, 21, 25, 16]));

?>