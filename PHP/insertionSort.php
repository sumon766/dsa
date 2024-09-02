<?php

    //Insertion sort algorithm to sort an Array

    function insertionSort($arr) {
        $n = count($arr);

        for($i = 1; $i < $n; $i++) {
            $insert_index = $i;
            $current_value = $arr[$i];

            for($j = $i - 1; $j >= 0; $j--) {
                if($arr[$j] > $current_value) {
                    $insert_index = $j;
                }
                else {
                    break;
                }
            }

            if($insert_index != $i) {
                array_splice($arr, $insert_index, 0, $current_value);
                array_splice($arr, $i + 1, 1);
            }
        }

        return $arr;
    }

    print_r(insertionSort([64, 34, 25, 12, 22, 11, 90, 5]));
    
    
    
    //Insertion sort improved algorithm to sort an Array faster with less moves
    echo "<br><br><br>";

    function insertionSortImproved($arr) {
        $n = count($arr);

        for($i = 1; $i < $n; $i++) {
            $insert_index = $i;
            $current_value = $arr[$i];

            for($j = $i - 1; $j >= 0; $j--) {
                if($arr[$j] > $current_value) {
                    $arr[$j + 1] = $arr[$j];
                    $insert_index = $j;
                }
                else {
                    break;
                }
            }

            $arr[$insert_index] = $current_value;
        }

        return $arr;
    }

    print_r(insertionSortImproved([64, 34, 25, 12, 22, 11, 90, 5]));

?>
